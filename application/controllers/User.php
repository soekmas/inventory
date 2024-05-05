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


class User extends CI_Controller
{   
    
	function __construct()
	{
			parent::__construct();
			$this->load->database();
		
       		/*cache controling*/
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
			$this->output->set_header('Pragma: no-cache');
		
    }
    
    /*default index function, redirects to login/dashboard */
    public function index()
    {
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('user_is_login') == 1)
            redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
    }
    
    /*admin home/dashboard*/
    function dashboard()
    {
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');
        	/* start menu active/inactive section*/
        	$this->session->unset_userdata('active_menu');
        	$this->session->set_userdata('active_menu', '1');
        	/* end menu active/inactive section*/
        	$data['page_name']  = 'dashboard';
        	$data['page_title'] = 'Admin Dashboard';
        	$this->load->view('user/index', $data);
    }

			/* Computer management*/ 
    function computer($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '2');
            /* end menu active/inactive section*/    
        	/* add new computer */        
        
        	$data['page_name']      = 'computer_manage';
        	$data['page_title']     = 'Manage Server| Laptop| Desktop';
        if ($param1 == 'details') {
            $data['page_name']  = 'computer_detail';
            $data['page_title'] = 'Asset Details';   
        }
        	$data['servers']        = $this->db->get_where('computer',array('type' => 'server'))->result_array();
        	$data['desktops']       = $this->db->get_where('computer',array('type' => 'desktop'))->result_array();
        	$data['laptops']        = $this->db->get_where('computer',array('type' => 'laptop'))->result_array();
        	$data['tablets']        = $this->db->get_where('computer',array('type' => 'tablet'))->result_array();
        	$this->load->view('user/index', $data);
    }
			/*  computer details*/ 
    function computer_details($param2=''){
        if ($param2 != '') {
            $data['page_name']  = 'computer_detail_inner';
            $data['page_title'] = 'Asset Details';
            $data['computeres']        = $this->db->get_where('computer',array('id' => $param2))->result_array();
            $this->load->view('user/index', $data);   
        }

    }

			/* device management */ 
    function device($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '3');
            /* end menu active/inactive section*/       
        	/* add new devices */         
        	$data['page_name']      = 'device_manage';
        	$data['page_title']     = 'Manage Devices';        
        	$this->load->view('user/index', $data);

    }
            /* accessories management */ 
    function accessories($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '4');
            /* end menu active/inactive section*/ 

                    
        	$data['page_name']      = 'accessories_manage';
        	$data['page_title']     = 'Manage Accessories';        
        	$this->load->view('user/index', $data);

    }
            /* ip management */ 
    function ip($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '5');
            /* end menu active/inactive section*/
            
        	$data['page_name']  = 'ip_manage';
        	$data['page_title'] = 'Manage IP address';
        	$data['ips']    = $this->db->get_where('ip')->result_array();        
        	$this->load->view('user/index', $data);
    }
            /* access management */ 
    function access($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '6');
            /* end menu active/inactive section*/ 

            /* add new access */       
        
        
        	$data['page_name']      = 'access_manage';
        	$data['page_title']     = 'Manage Access';
        	$this->load->view('user/index', $data);

    }
            /* setting management */ 
    function setting($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
         /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '7');
            /* end menu active/inactive section*/ 

            /* setting update */ 
        if ($param1 == 'update') {           
             
             $data['value'] = $this->input->post('company_name');
             $this->db->where('title' , 'company_name');
             $this->db->update('config' , $data);
             
             $data['value'] = $this->input->post('address');
             $this->db->where('title' , 'address');
             $this->db->update('config' , $data);
             
             $data['value'] = $this->input->post('phone');
             $this->db->where('title' , 'phone');
             $this->db->update('config' , $data);
             
             $data['value'] = $this->input->post('system_email');
             $this->db->where('title' , 'system_email');
             $this->db->update('config' , $data);

             $this->session->set_flashdata('success', 'Setting information update successed.');           
             redirect(base_url() . 'index.php?user/setting/', 'refresh');
        }
            /* change system logo*/ 
        if ($param1 == 'change_logo') {
            move_uploaded_file($_FILES['logo']['tmp_name'], 'uploads/system_logo/logo.png');
            $this->session->set_flashdata('success', 'Logo change successed');
            redirect(base_url() . 'index.php?user/setting/', 'refresh');
        }
            /* utility setting management */ 
        if($param1 == 'utility'){
             /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '8');
            /* end menu active/inactive section*/
            $data['page_name']  = 'utility-setting';
            $data['page_title'] = 'Utility Setting';
            $data['setting_info']   = $this->db->get('config')->result_array();
            $this->load->view('user/index', $data);
        }
        else{

        	$data['page_name']  = 'manage-setting';
        	$data['page_title'] = 'Genaral Setting';
       		$data['setting_info']   = $this->db->get('config')->result_array();
        	$this->load->view('user/index', $data);
    }
        
    }


    
    
    


    function category($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');       
        
        if ($param1 == 'add') {
            
            $data['category_name']        = $this->input->post('category_name');
            $data['category_desc']        = $this->input->post('category_desc');        
            
            
            $this->db->insert('category', $data);
            $this->session->set_flashdata('success', 'Category added successed');
            redirect(base_url() . 'index.php?user/device/', 'refresh');
        }
        if ($param1 == 'update') {
            $data['category_name']        = $this->input->post('category_name');
            $data['category_desc']        = $this->input->post('category_desc');            

            $this->db->where('category_id', $param2);
            $this->db->update('category', $data);
            $this->session->set_flashdata('success', 'Category update successed.');
            redirect(base_url() . 'index.php?user/device/', 'refresh');
        }
        

        if ($param1 == 'delete') {
            $this->db->where('category_id', $param2);
            $this->db->delete('category');
        }


    }

    function apps($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');       
        
        if ($param1 == 'add') {
            
            $data['apps_name']        = $this->input->post('apps_name');
            $data['apps_desc']        = $this->input->post('apps_desc');        
            
            
            $this->db->insert('apps', $data);
            $this->session->set_flashdata('success', 'apps added successed');
            redirect(base_url() . 'index.php?user/access/', 'refresh');
        }
        if ($param1 == 'update') {
            $data['apps_name']        = $this->input->post('apps_name');
            $data['apps_desc']        = $this->input->post('apps_desc');            

            $this->db->where('apps_id', $param2);
            $this->db->update('apps', $data);
            $this->session->set_flashdata('success', 'apps update successed.');
            redirect(base_url() . 'index.php?user/access/', 'refresh');
        }
        

        if ($param1 == 'delete') {
            $this->db->where('apps_id', $param2);
            $this->db->delete('apps');
        }


    }



    function brand($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');       
        
        if ($param1 == 'add') {
            
            $data['brand_name']        = $this->input->post('brand_name');
            $data['description']        = $this->input->post('description');        
            
            
            $this->db->insert('brand', $data);
            $this->session->set_flashdata('success', 'brand added successed');
            redirect(base_url() . 'index.php?user/setting/utility/', 'refresh');
        }
        if ($param1 == 'update') {
            $data['brand_name']        = $this->input->post('brand_name');
            $data['description']        = $this->input->post('description');            

            $this->db->where('brand_id', $param2);
            $this->db->update('brand', $data);
            $this->session->set_flashdata('success', 'brand update successed.');
            redirect(base_url() . 'index.php?user/setting/utility/', 'refresh');
        }
        

        if ($param1 == 'delete') {
            $this->db->where('brand_id', $param2);
            $this->db->delete('brand');
        }


    }


    function supplier($param1 = '', $param2 = ''){
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url(), 'refresh');       
        
        if ($param1 == 'add') {
            
            $data['supplier_name']        = $this->input->post('supplier_name');
            $data['supplier_address']        = $this->input->post('supplier_address');
            $data['supplier_phone']        = $this->input->post('supplier_phone');
            $data['supplier_email']        = $this->input->post('supplier_email');        
            
            
            $this->db->insert('supplier', $data);
            $this->session->set_flashdata('success', 'supplier added successed');
            redirect(base_url() . 'index.php?user/setting/utility/', 'refresh');
        }
        if ($param1 == 'update') {
            $data['supplier_name']        = $this->input->post('supplier_name');
            $data['supplier_address']        = $this->input->post('supplier_address');
            $data['supplier_phone']        = $this->input->post('supplier_phone');
            $data['supplier_email']        = $this->input->post('supplier_email');            

            $this->db->where('supplier_id', $param2);
            $this->db->update('supplier', $data);
            $this->session->set_flashdata('success', 'supplier update successed.');
            redirect(base_url() . 'index.php?user/setting/utility', 'refresh');
        }
        

        if ($param1 == 'delete') {
            $this->db->where('supplier_id', $param2);
            $this->db->delete('supplier');
        }
    }
	
    function popup_modal($page_name = '' , $param2 = '' , $param3 = '')
    {
        	$account_type       =   $this->session->userdata('login_type');
        	$data['param2']     =   $param2;
        	$data['param3']     =   $param3;
        	$this->load->view('user_is_login/'.$page_name.'.php' ,$data);
        
        
    }


    function manage_profile(){
        	/* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            /* end menu active/inactive section*/ 
        	$data['page_name']  = 'manage_profile';
        	$data['page_title'] = 'Update profile information';
        	$data['profile_info']  = $this->db->get_where('user', array(
            'user_id' => $this->session->userdata('user_id')))->result_array();
        	$this->load->view('user/index', $data);
    }


    function profile($param1 = '', $param2 = '', $param3 = '')
    {
        	$user_id=$this->session->userdata('user_id');
        if ($this->session->userdata('user_is_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1 == 'update') {
            $data['name']  = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            
            $this->db->where('user_id', $user_id);
            $this->db->update('user', $data);
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/user_image/' . $user_id . '.jpg');
            $this->session->set_flashdata('success', 'Profile information updated.');
            redirect(base_url() . 'index.php?user/manage_profile/', 'refresh');
        }
        if ($param1 == 'change_password') {
            $password               = md5($this->input->post('password'));
            $new_password           = md5($this->input->post('new_password'));
            $retype_new_password    = md5($this->input->post('retype_new_password'));
            
            $current_password = $this->db->get_where('user', array(
                'user_id' => $this->session->userdata('user_id')
            ))->row()->password;
            
            if ($current_password == $password && $new_password == $retype_new_password) {
                $this->db->where('user_id', $this->session->userdata('user_id'));
                $this->db->update('user', array(
                    'password' => $new_password
                ));
                $this->session->set_flashdata('success', 'Password changed.');
            }
            elseif ($current_password !=$password ){
                $this->session->set_flashdata('error', 'Old password not correct.');

            } else {
                $this->session->set_flashdata('error', 'Password not match.');
            }
            redirect(base_url() . 'index.php?user/manage_profile/', 'refresh');
        }
    } 
    
}
