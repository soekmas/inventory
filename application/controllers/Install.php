<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * IT Now.
 *
 * Web based warranty and inventory tracking system available on codecanyon
 *
 * @package     IT Now
 * @author      Abdul Mannan
 * @copyright   Copyright (c) 2014 - 2016 SpaGreen,
 * @license     http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
 * @link        http://www.spagreen.net
 * @link        support@spagreen.net
 *
 **/

class Install extends CI_Controller {

	function __construct()
    {
        parent::__construct();	
		$this->load->helper('url');
		$this->load->helper('file');
		// Cache control
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
	}
	/*installation page*/
	function index()
	{
		$data['msg']	=	'';
		$this->load->view('install',$data);
	}

		/*	if error occurs return to installation page with message*/
	function install_error()
	{
		$data['msg']	=	'error';
		$this->load->view('install',$data);
		
	}
		/*	installation start */
	function run_install()
	{
		$db_connection_is_ok				=	$this->check_db_connection();
		
		
		
		if($db_connection_is_ok == true){
			$data = read_file('./application/config/database.php');
			$data = str_replace('%_database_name_%',		$this->input->post('db_name'),		$data);
			$data = str_replace('%_database_user_name_%',		$this->input->post('db_username'),		$data);
			$data = str_replace('%_database_password_%',	$this->input->post('db_password'),	$data);						
			$data = str_replace('%_host_name_%',		$this->input->post('hostname'),		$data);
			write_file('./application/config/database.php', $data);
			
			// Replace new default routing controller
			$data2 = read_file('./application/config/routes.php');
			$data2 = str_replace('install','login',$data2);
			write_file('./application/config/routes.php', $data2);
			
			
			// Run the installer sql schema
			
			$database_schema = read_file('./uploads/install/itnow.sql');
  		
			$query = rtrim( trim($database_schema), "\n;");
			$query_list = explode(";", $query);
			$this->load->database();
			foreach($query_list as $query_run)
				 $this->db->query($query_run);
				 
				 
			//Replace the admin login credentials
			$this->db->where('user_id' , 1);
			$this->db->update('user' , array('username'=>$this->input->post('login_username'),'email'	=>	$this->input->post('email'),'password'	=>	md5($this->input->post('login_password'))));
			
			// Replace the company name						
			$this->db->where('title', 'company_name');
			$this->db->update('config', array(
				'value' => $this->input->post('company_name')
			));

			// Replace the company email					
			$this->db->where('title', 'system_email');
			$this->db->update('config', array(
				'value' => $this->input->post('email')
			));
					
			// Redirect to login page after completing installation			
			redirect(base_url() , 'refresh');
		}
		else 
		{
			redirect(base_url().'index.php?install/install_error' , 'refresh');
		}
	}

	function check_db_connection()
	{
		$link	=	@mysql_connect($this->input->post('hostname'),
						$this->input->post('db_username'),
							$this->input->post('db_password'));
		if(!$link)
		{
			@mysql_close($link);
		 	return false;
		}
		
		$db_selected	=	mysql_select_db($this->input->post('db_name'), $link);
		if (!$db_selected)
		{
			@mysql_close($link);
		 	return false;
		}
		
		@mysql_close($link);
		return true;
	}


	function check_installation_connection()
	{
		$response = array();		
		//Ajax database name,username and password request
		$hostname 					= $_POST["hostname"];
		$db_username 				= $_POST["db_username"];
		$db_password 				= $_POST["db_password"];
		$db_name 					= $_POST["db_name"];		
		$response['submitted_data'] = $_POST;		
		
		//Validating connection
		$connection_status = $this->validate_connection( $hostname ,  $db_username ,  $db_password , $db_name  );
		$response['connection_status'] = $connection_status;	
		
		//Replying ajax request with validation response
		echo json_encode($response);
	}
    
    //Validating connection from ajax request
    function validate_connection($hostname	=	'' , $db_username	 =  '' , $db_password	 =  '' , $db_name ='')
    {
		 $link	=	@mysql_connect($hostname,$db_username,$db_password);
		if(!$link)
		{
			@mysql_close($link);
		 	return 'invalid';
		}
		
		$db_selected	=	mysql_select_db($db_name, $link);
		if (!$db_selected)
		{
			@mysql_close($link);
		 	return 'invalid';
		}
		
		@mysql_close($link);
		return 'success';		
    }

    function check_purchase_code()
	{
		//return true;
		$buyer				=	$this->input->post('buyer');
		$purchase_code		=	$this->input->post('purchase_code');
		$curl 				=	curl_init('http://marketplace.envato.com/api/edge/spagreen/oiysrb3xok0mkxzmydb6vga71qbofrg9/verify-purchase:'.$purchase_code.'.xml');
		
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
		
		$purchase_data		=	curl_exec($curl);
		curl_close($curl);
		$purchase_data		=	json_decode(json_encode((array) simplexml_load_string($purchase_data)),1);

		if ( isset($purchase_data['verify-purchase']['buyer']) && $purchase_data['verify-purchase']['buyer'] == $buyer)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	function ajax_check_purchase_code()
	{
		$response = array();
		$buyer				=	$_POST["buyer"];
		$purchase_code		=	$_POST["purchase_code"];
		$response['submitted_data'] = $_POST;		
		//Validating connection
		$status = $this->valid_purchase_code( $buyer,$purchase_code );
		$response['purchase_status'] = $status;	
		
		//Replying ajax request with validation response
		echo json_encode($response);
	}


	function valid_purchase_code($buyer ='', $purchase_code ='')
	{

    	$curl 				=	curl_init('http://marketplace.envato.com/api/edge/spagreen/oiysrb3xok0mkxzmydb6vga71qbofrg9/verify-purchase:'.$purchase_code.'.xml');
		
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
		
		$purchase_data		=	curl_exec($curl);
		curl_close($curl);
		$purchase_data		=	json_decode(json_encode((array) simplexml_load_string($purchase_data)),1);

		if ( isset($purchase_data['verify-purchase']['buyer']) && $purchase_data['verify-purchase']['buyer'] == $buyer)
		{
			return 'valid';
		}
		else
		{
			return 'invalid';
		}
	}
}

