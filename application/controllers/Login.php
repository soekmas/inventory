<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

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
 
class Login extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }
	
    //Default function, redirects to logged in user area
    public function index()
    {
        
    if ($this->session->userdata('admin_is_login') == 1)
        redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
    if ($this->session->userdata('user_is_login') == 1)
        redirect(base_url() . 'index.php?user/dashboard', 'refresh');
		$this->load->view('login');
        
    }
    
	
	function ajax_login()
	{
		$response = array();
		
		//Ajax username and password request
		$username 					= $_POST["username"];
		$password 					= md5($_POST["password"]);
		$user_role 					= 'admin';
		$response['submitted_data'] = $_POST;		
		
		//Validating login
		$login_status = $this->validate_login( $username ,  $password ,  $user_role );
		$response['login_status'] = $login_status;
		if ($login_status == 'success') {
			$response['redirect_url'] = base_url();
		}
		
		//Replying ajax request with validation response
		echo json_encode($response);
	}
    
    //Validating login from ajax request
    function validate_login($username	=	'' , $password	 =  '' , $user_role	 =  '')
    {
		 $credential	=	array(	'username' => $username , 'password' => $password );
		 
		 
		 // Checking login credential for admin
        $query = $this->db->get_where('user' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            if($row->role=='admin'){
			  $this->session->set_userdata('admin_is_login', '1');			  	
			  $this->session->set_userdata('user_id', $row->user_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('username', $row->username);
			  $this->session->set_userdata('login_type', 'admin');
			}
			if($row->role=='user'){
			  $this->session->set_userdata('user_is_login', '1');			  	
			  $this->session->set_userdata('user_id', $row->user_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('username', $row->username);
			  $this->session->set_userdata('login_type', 'user');
			}
			  return 'success';
		}
		
		return 'invalid';		
    }


    // logout function
    function logout()
    {
        $this->session->unset_userdata('');
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() , 'refresh');
    }    
}
