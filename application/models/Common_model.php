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
 

class Common_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
		/* clear cache*/	
	function clear_cache()
	{
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
	}

		/* get brand name*/
	function get_brand_name($brand_id)
	{
		$query	=	$this->db->get_where('brand' , array('brand_id' => $brand_id));
		$res	=	$query->result_array();
		foreach($res as $row)			
			return $row['brand_name'];
	}
		/* get operating system name*/
	function get_os_name($os_id)
	{
		$query	=	$this->db->get_where('os' , array('os_id' => $os_id));
		$res	=	$query->result_array();
		foreach($res as $row)			
			return $row['os_name'];
	}
		/* get supplier name*/
	function get_supplier_name($supplier_id)
	{
		$query	=	$this->db->get_where('supplier' , array('supplier_id' => $supplier_id));
		$res	=	$query->result_array();
		foreach($res as $row)			
			return $row['supplier_name'];
	}
		/* get category name*/
	function get_category_name($category_id)
	{
		$query	=	$this->db->get_where('category' , array('category_id' => $category_id));
		$res	=	$query->result_array();
		foreach($res as $row)			
			return $row['category_name'];
	}
		/* get application/platform name*/
	function get_apps_name($apps_id)
	{
		$query	=	$this->db->get_where('apps' , array('apps_id' => $apps_id));
		$res	=	$query->result_array();
		foreach($res as $row)			
			return $row['apps_name'];
	}

	
		/* get image url */
	function get_image_url($type = '' , $id = '')
	{
		if(file_exists('uploads/'.$type.'_image/'.$id.'.jpg'))
			$image_url	=	base_url().'uploads/'.$type.'_image/'.$id.'.jpg';
		else
			$image_url	=	base_url().'uploads/user.jpg';
			
		return $image_url;
	}
		/* create and download database backup*/
	function create_backup()
	{
		$this->load->database();
		$this->load->dbutil();	
		$options = array(
                'format'      => 'txt',             
                'add_drop'    => TRUE,              
                'add_insert'  => TRUE,              
                'newline'     => "\n"               
              );	 
		
		$tables = array('');
		$date=date('d-m-Y');
		$file_name	=	'itnow_'.$date;
		$backup =& $this->dbutil->backup(array_merge($options , $tables));


		$this->load->helper('download');
		force_download($file_name.'.sql', $backup);
	}
	
	
		/* restore database backup*/	
	function restore_backup()
	{
		
		move_uploaded_file($_FILES['backup_file']['tmp_name'], 'uploads/backup.sql');

		$prefs = array(
            'filepath'						=> 'uploads/backup.sql',
			'delete_after_upload'			=> TRUE,
			'delimiter'						=> ';'
        );
		
		$schema = htmlspecialchars(file_get_contents($prefs['filepath']));

		$query = rtrim( trim($schema), "\n;");

		$query_list = explode(";", $query);
		$this->truncate();	
		

        foreach($query_list as $query){
        	$this->db->query($query);
        }
		/*$restore =& $this->dbutil->restore($prefs);
	*/
        unlink($prefs['filepath']);
	}
	
		/* empty data from table */
	function truncate() {
            $this->db->truncate('access');
            $this->db->truncate('accessories');
            $this->db->truncate('apps');
            $this->db->truncate('brand');
            $this->db->truncate('category');
            $this->db->truncate('computer');
            $this->db->truncate('ip');
            $this->db->truncate('device');
            $this->db->truncate('os');
            $this->db->truncate('supplier');  
    }

    function set_custom_value(){
    	$data['value'] = "Luke Dhaka Company Limited";
             $this->db->where('title' , 'company_name');
             $this->db->update('config' , $data);
             
             $data['value'] = "Gulshan, Dhaka-1200";
             $this->db->where('title' , 'address');
             $this->db->update('config' , $data);
             
             $data['value'] = "880100000000";
             $this->db->where('title' , 'phone');
             $this->db->update('config' , $data);
             
             $data['value'] = "support@spagreen.net";
             $this->db->where('title' , 'system_email');
             $this->db->update('config' , $data);
    }

     function reset_database(){
     	$this->set_custom_value();
     	$this->truncate();
    $prefs = array(
            'filepath'						=> 'uploads/data.sql',
			'delete_after_upload'			=> FALSE,
			'delimiter'						=> ';'
        );
		
		$schema = htmlspecialchars(file_get_contents($prefs['filepath']));

		$query = rtrim( trim($schema), "\n;");

		$query_list = explode(";", $query);
		$this->truncate();
		foreach($query_list as $query){
        	$this->db->query($query);
        }
        unlink($prefs['filepath']);

    }

}

