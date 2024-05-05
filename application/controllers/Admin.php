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


class Admin extends CI_Controller
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
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('admin_is_login') == 1)
            redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
    }
    
    /*admin home/dashboard*/
    function dashboard()
    {
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
        	/* start menu active/inactive section*/
        	$this->session->unset_userdata('active_menu');
        	$this->session->set_userdata('active_menu', '1');
        	/* end menu active/inactive section*/
        	$data['page_name']  = 'dashboard';
        	$data['page_title'] = 'Admin Dashboard';
        	$this->load->view('admin/index', $data);
    }

			/* Computer management*/ 
    function computer($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '2');
            /* end menu active/inactive section*/    
        	/* add new computer */ 
        if ($param1 == 'add') {
            $p_date     				=   $this->input->post('purchase_date');
            $warranty_duration  		= $this->input->post('warranty_duration');             
            $date       				= date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date     				= date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $data['computer_name']      = $this->input->post('computer_name');
            $data['type']               = $this->input->post('type');
            $data['description']        = $this->input->post('description');
            $data['brand_id']           = $this->input->post('brand_id');
            $data['model']              = $this->input->post('model');
            $data['processor']          = $this->input->post('processor');
            $data['ram']                = $this->input->post('ram');
            $data['os_id']              = $this->input->post('os_id');
            $data['supplier_id']        = $this->input->post('supplier_id');
            $data['serial_no']          = $this->input->post('serial_no');
            $data['purchase_date']      = $date;
            $data['warranty_duration']  = $warranty_duration;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $this->input->post('issue_to');
            
            $this->db->insert('computer', $data);
            $this->session->set_flashdata('success', 'Asset added successed');
            redirect(base_url() . 'index.php?admin/computer/', 'refresh');
        }  


			/* edit computer */ 
        if ($param1 == 'update') {
            $p_date     				=   $this->input->post('purchase_date');
            $warranty_duration  		= $this->input->post('warranty_duration');             
            $date       				= date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date     				= date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $data['computer_name']      = $this->input->post('computer_name');
            $data['type']               = $this->input->post('type');
            $data['description']        = $this->input->post('description');
            $data['brand_id']           = $this->input->post('brand_id');
            $data['model']              = $this->input->post('model');
            $data['processor']          = $this->input->post('processor');
            $data['ram']                = $this->input->post('ram');
            $data['os_id']              = $this->input->post('os_id');
            $data['supplier_id']        = $this->input->post('supplier_id');
            $data['serial_no']          = $this->input->post('serial_no');
            $data['purchase_date']      = $date;
            $data['warranty_duration']  = $warranty_duration;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $this->input->post('issue_to');

            $this->db->where('id', $param2);
            $this->db->update('computer', $data);
            $this->session->set_flashdata('success', 'Asset update successed.');
            redirect(base_url() . 'index.php?admin/computer/', 'refresh');
        }
			/* delete computer */       
        if ($param1 == 'delete') {
            $this->db->where('id', $param2);
            $this->db->delete('computer');
            redirect(base_url() . 'index.php?admin/computer/', 'refresh');
        }
        
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
        	$this->load->view('admin/index', $data);
    }
			/*  computer details*/ 
    function computer_details($param2=''){
        if ($param2 != '') {
            $data['page_name']  = 'computer_detail_inner';
            $data['page_title'] = 'Asset Details';
            $data['computeres']        = $this->db->get_where('computer',array('id' => $param2))->result_array();
            $this->load->view('admin/index', $data);   
        }

    }


    function computer_bulk_add($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            
        if ($param1 == 'add') {
            $p_date                     =   $this->input->post('purchase_date');
            $warranty_duration          = $this->input->post('warranty_duration');             
            $date                       = date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date                     = date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $computer_name      = $this->input->post('computer_name');
            $type               = $this->input->post('type');
            $description        = $this->input->post('description');
            $brand_id           = $this->input->post('brand_id');
            $model              = $this->input->post('model');
            $processor          = $this->input->post('processor');
            $ram                = $this->input->post('ram');
            $os_id              = $this->input->post('os_id');
            $supplier_id        = $this->input->post('supplier_id');
            $serial_no          = $this->input->post('serial_no');            
            $issue_to           = $this->input->post('issue_to');
            for($i=0;$i<sizeof($computer_name);$i++){                
            $data['computer_name']      = $computer_name[$i];
            $data['type']               = $type;
            $data['description']        = $description[$i];
            $data['brand_id']           = $brand_id;
            $data['model']              = $model[$i];
            $data['processor']          = $processor[$i];
            $data['ram']                = $ram;
            $data['os_id']              = $os_id[$i];
            $data['supplier_id']        = $supplier_id;
            $data['serial_no']          = $serial_no[$i];
            $data['purchase_date']      = $date;
            $data['warranty_duration']  = $warranty_duration;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $issue_to[$i];

            $this->db->insert('computer', $data);            
        }
        $this->session->set_flashdata('success', 'IP added successed.');
        redirect(base_url() . 'index.php?admin/computer/', 'refresh');
            

        }
        $data['page_name']  = 'computer_add_bulk';
        $data['page_title'] = 'Manage Copmuter';        
        $this->load->view('admin/index', $data);
        }

			/* device management */ 
    function device($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '3');
            /* end menu active/inactive section*/       
        	/* add new devices */ 
        if ($param1 == 'add') {
            $p_date     				= $this->input->post('purchase_date');
            $warranty_duration  		= $this->input->post('warranty_duration');             
            $date       				= date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date     				= date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $data['device_name']        = $this->input->post('device_name');
            $data['description']        = $this->input->post('description');            
            $data['category_id']        = $this->input->post('category_id');
            $data['brand_id']           = $this->input->post('brand_id');
            $data['model']              = $this->input->post('model');            
            $data['supplier_id']        = $this->input->post('supplier_id');
            $data['serial_no']          = $this->input->post('serial_no');
            $data['warranty_duration']  = $warranty_duration;
            $data['purchase_date']      = $date;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $this->input->post('issue_to');
            
            $this->db->insert('device', $data);
            $this->session->set_flashdata('success', 'Device added successed');
            redirect(base_url() . 'index.php?admin/device/', 'refresh');
        }
			/* edit device*/ 
        if ($param1 == 'update') {
            $p_date     				=   $this->input->post('purchase_date');
            $warranty_duration  		= $this->input->post('warranty_duration');             
            $date       				= date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date     				= date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $data['device_name']        = $this->input->post('device_name');
            $data['description']        = $this->input->post('description');            
            $data['category_id']        = $this->input->post('category_id');
            $data['brand_id']           = $this->input->post('brand_id');
            $data['model']              = $this->input->post('model');            
            $data['supplier_id']        = $this->input->post('supplier_id');
            $data['serial_no']          = $this->input->post('serial_no');
            $data['warranty_duration']  = $warranty_duration;
            $data['purchase_date']      = $date;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $this->input->post('issue_to');

            $this->db->where('device_id', $param2);
            $this->db->update('device', $data);
            $this->session->set_flashdata('success', 'Device update successed.');
            redirect(base_url() . 'index.php?admin/device/', 'refresh');
        }
        
			/* delete device */ 
        if ($param1 == 'delete') {
            $this->db->where('device_id', $param2);
            $this->db->delete('device');
            redirect(base_url() . 'index.php?admin/device/', 'refresh');
        }
        
        	$data['page_name']      = 'device_manage';
        	$data['page_title']     = 'Manage Devices';        
        	$this->load->view('admin/index', $data);

    }
            /* accessories management */ 
    function accessories($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '4');
            /* end menu active/inactive section*/ 

            /* add new accessories */     
        
        if ($param1 == 'add') {

            $p_date     =   $this->input->post('purchase_date');
            $warranty_duration  = $this->input->post('warranty_duration');             
            $date       = date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date     = date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $data['accessories_name']        = $this->input->post('accessories_name');
            $data['description']        = $this->input->post('description');
            $data['brand_id']           = $this->input->post('brand_id');
            $data['model']              = $this->input->post('model');            
            $data['supplier_id']        = $this->input->post('supplier_id');
            $data['serial_no']          = $this->input->post('serial_no');
            $data['warranty_duration']  = $warranty_duration;
            $data['purchase_date']      = $date;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $this->input->post('issue_to');
            
            $this->db->insert('accessories', $data);
            $this->session->set_flashdata('success', 'Accessories added successed');
            redirect(base_url() . 'index.php?admin/accessories/', 'refresh');
        }
            /* edit accessories */ 
        if ($param1 == 'update') {
            $p_date     =   $this->input->post('purchase_date');
            $warranty_duration  = $this->input->post('warranty_duration');             
            $date       = date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date     = date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $data['accessories_name']        = $this->input->post('accessories_name');
            $data['description']        = $this->input->post('description');
            $data['brand_id']           = $this->input->post('brand_id');
            $data['model']              = $this->input->post('model');            
            $data['supplier_id']        = $this->input->post('supplier_id');
            $data['serial_no']          = $this->input->post('serial_no');
            $data['warranty_duration']  = $warranty_duration;
            $data['purchase_date']      = $date;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $this->input->post('issue_to');

            $this->db->where('accessories_id', $param2);
            $this->db->update('accessories', $data);
            $this->session->set_flashdata('success', 'accessories update successed.');
            redirect(base_url() . 'index.php?admin/accessories/', 'refresh');
        }
            /* delete accessories */        

        if ($param1 == 'delete') {
            $this->db->where('accessories_id', $param2);
            $this->db->delete('accessories');
            redirect(base_url() . 'index.php?admin/accessories/', 'refresh');
        }
        
        	$data['page_name']      = 'accessories_manage';
        	$data['page_title']     = 'Manage Accessories';        
        	$this->load->view('admin/index', $data);

    }

    function accessories_bulk_add($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            
        if ($param1 == 'add') {
            $p_date                     =   $this->input->post('purchase_date');
            $warranty_duration          = $this->input->post('warranty_duration');             
            $date                       = date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date                     = date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $accessories_name   = $this->input->post('accessories_name');
            $description        = $this->input->post('description');
            $brand_id           = $this->input->post('brand_id');
            $model              = $this->input->post('model');            
            $supplier_id        = $this->input->post('supplier_id');
            $serial_no          = $this->input->post('serial_no');            
            $issue_to           = $this->input->post('issue_to');
            for($i=0;$i<sizeof($accessories_name);$i++){                
            $data['accessories_name']   = $accessories_name[$i];
            $data['description']        = $description[$i];
            $data['brand_id']           = $brand_id;
            $data['model']              = $model[$i];            
            $data['supplier_id']        = $supplier_id;
            $data['serial_no']          = $serial_no[$i];
            $data['purchase_date']      = $date;
            $data['warranty_duration']  = $warranty_duration;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $issue_to[$i];

            $this->db->insert('accessories', $data);            
        }
        $this->session->set_flashdata('success', 'Accessories added successed.');
        redirect(base_url() . 'index.php?admin/accessories/', 'refresh');
            

        }
        $data['page_name']  = 'accessories_add_bulk';
        $data['page_title'] = 'Manage Accessories';        
        $this->load->view('admin/index', $data);
        }



    function device_bulk_add($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            
        if ($param1 == 'add') {
            $p_date                     =   $this->input->post('purchase_date');
            $warranty_duration          = $this->input->post('warranty_duration');             
            $date                       = date('Y-m-d', strtotime(str_replace('-', '/', $p_date)));            
            $w_date                     = date('Y-m-d', strtotime($date. ' + '.$warranty_duration.' days'));
            $device_name        = $this->input->post('device_name');
            $category_id               = $this->input->post('category_id');
            $description        = $this->input->post('description');
            $brand_id           = $this->input->post('brand_id');
            $model              = $this->input->post('model');            
            $supplier_id        = $this->input->post('supplier_id');
            $serial_no          = $this->input->post('serial_no');            
            $issue_to           = $this->input->post('issue_to');
            for($i=0;$i<sizeof($device_name);$i++){                
            $data['device_name']        = $device_name[$i];
            $data['category_id']        = $category_id;
            $data['description']        = $description[$i];
            $data['brand_id']           = $brand_id;
            $data['model']              = $model[$i];            
            $data['supplier_id']        = $supplier_id;
            $data['serial_no']          = $serial_no[$i];
            $data['purchase_date']      = $date;
            $data['warranty_duration']  = $warranty_duration;
            $data['warranty_end_date']  = $w_date;
            $data['issue_to']           = $issue_to[$i];

            $this->db->insert('device', $data);            
        }
        $this->session->set_flashdata('success', 'Device added successed.');
        redirect(base_url() . 'index.php?admin/device/', 'refresh');
            

        }
        $data['page_name']  = 'device_add_bulk';
        $data['page_title'] = 'Manage Device';        
        $this->load->view('admin/index', $data);
        }



    function ip_bulk_add($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '5');
            /* end menu active/inactive section*/
            /* add new ip */ 
        if ($param1 == 'add') {
            $host_name      = $this->input->post('host_name');
            $mac            = $this->input->post('mac');
            $ipv4            = $this->input->post('ipv4');
            $ipv6            = $this->input->post('ipv6');
            $subnet            = $this->input->post('subnet');
            $gateway            = $this->input->post('gateway');
            $dns1            = $this->input->post('dns1');
            $dns2            = $this->input->post('dns2');
            for($i=0;$i<sizeof($host_name);$i++){                
                $data['host_name']      = $host_name[$i];
                $data['mac']            = $mac[$i];
                $data['ipv4']           = $ipv4[$i];
                $data['ipv6']           = $ipv6[$i];
                $data['subnet']         = $subnet[$i];
                $data['gateway']        = $gateway[$i];
                $data['dns1']           = $dns1[$i];
                $data['dns2']           = $dns2[$i];

            $this->db->insert('ip', $data);            
        }
        $this->session->set_flashdata('success', 'IP added successed.');
        redirect(base_url() . 'index.php?admin/ip/', 'refresh');
            

        }
        $data['page_name']  = 'ip_add_bulk';
            $data['page_title'] = 'Manage IP address';
            $data['ips']    = $this->db->get_where('ip')->result_array();        
            $this->load->view('admin/index', $data);
        }
            /* ip management */ 
    function ip($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '5');
            /* end menu active/inactive section*/
            /* add new ip */ 
        if ($param1 == 'add') {
            $data['host_name']      = $this->input->post('host_name');
            $data['ipv4']           = $this->input->post('ipv4');
            $data['ipv6']           = $this->input->post('ipv6');
            $data['mac']            = $this->input->post('mac');
            $data['subnet']         = $this->input->post('subnet');
            $data['gateway']        = $this->input->post('gateway');
            $data['dns1']           = $this->input->post('dns1');
            $data['dns2']           = $this->input->post('dns2');
            
            
            $this->db->insert('ip', $data);
            $this->session->set_flashdata('success', 'IP added successed.');
            redirect(base_url() . 'index.php?admin/ip/', 'refresh');
        }
            /* edit ip */ 
        if ($param1 == 'update') {
            $data['host_name']      = $this->input->post('host_name');
            $data['ipv4']           = $this->input->post('ipv4');
            $data['ipv6']           = $this->input->post('ipv6');
            $data['mac']            = $this->input->post('mac');
            $data['subnet']         = $this->input->post('subnet');
            $data['gateway']        = $this->input->post('gateway');
            $data['dns1']           = $this->input->post('dns1');
            $data['dns2']           = $this->input->post('dns2');

            $this->db->where('ip_id', $param2);
            $this->db->update('ip', $data);
            $this->session->set_flashdata('success', 'IP update successed.');
            redirect(base_url() . 'index.php?admin/ip/', 'refresh');
        } 
            /* delete ip */ 
        if ($param1 == 'delete') {
            $this->db->where('ip_id', $param2);
            $this->db->delete('ip');
            redirect(base_url() . 'index.php?admin/ip/', 'refresh');
        }
        	$data['page_name']  = 'ip_manage';
        	$data['page_title'] = 'Manage IP address';
        	$data['ips']    = $this->db->get_where('ip')->result_array();        
        	$this->load->view('admin/index', $data);
    }
            /* access management */ 
    function access($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '6');
            /* end menu active/inactive section*/ 

            /* add new access */   
        
        if ($param1 == 'add') {
            $data['apps_id']                = $this->input->post('apps_id');
            $data['access_name']            = $this->input->post('access_name');
            $data['host_name']              = $this->input->post('host_name');
            $data['ip_address']             = $this->input->post('ip_address');
            $data['username']               = $this->input->post('username');
            $data['email']                  = $this->input->post('email');
            $data['password']               = $this->input->post('password');
            $data['api_key']                = $this->input->post('api_key');
            $data['access_token']           = $this->input->post('access_token');
            $data['secret_key']             = $this->input->post('secret_key');
            $data['key1']                   = $this->input->post('key1');
            $data['key2']                   = $this->input->post('key2');
            $data['key3']                   = $this->input->post('key3');
            $data['key4']                   = $this->input->post('key4');
            
            
            $this->db->insert('access', $data);
            $this->session->set_flashdata('success', 'Access added successed');
            redirect(base_url() . 'index.php?admin/access/', 'refresh');
        }
            /* edit access */ 
        if ($param1 == 'update') {
            $data['apps_id']                = $this->input->post('apps_id');
            $data['access_name']            = $this->input->post('access_name');
            $data['host_name']              = $this->input->post('host_name');
            $data['ip_address']             = $this->input->post('ip_address');
            $data['username']               = $this->input->post('username');
            $data['email']                  = $this->input->post('email');
            $data['password']               = $this->input->post('password');
            $data['api_key']                = $this->input->post('api_key');
            $data['access_token']           = $this->input->post('access_token');
            $data['secret_key']             = $this->input->post('secret_key');
            $data['key1']                   = $this->input->post('key1');
            $data['key2']                   = $this->input->post('key2');
            $data['key3']                   = $this->input->post('key3');
            $data['key4']                   = $this->input->post('key4');

            $this->db->where('access_id', $param2);
            $this->db->update('access', $data);
            $this->session->set_flashdata('success', 'access update successed.');
            redirect(base_url() . 'index.php?admin/access/', 'refresh');
        }

            /* delete access */        

        if ($param1 == 'delete') {
            $this->db->where('access_id', $param2);
            $this->db->delete('access');
        }
        
        	$data['page_name']      = 'access_manage';
        	$data['page_title']     = 'Manage Access';
        	$this->load->view('admin/index', $data);

    }


    function access_bulk_add($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            
        if ($param1 == 'add') {
            $apps_id                = $this->input->post('apps_id');
            $access_name            = $this->input->post('access_name');
            $host_name              = $this->input->post('host_name');
            $ip_address             = $this->input->post('ip_address');
            $username               = $this->input->post('username');
            $email                  = $this->input->post('email');
            $password               = $this->input->post('password');
            $api_key                = $this->input->post('api_key');
            $access_token           = $this->input->post('access_token');
            $secret_key             = $this->input->post('secret_key');
            $key1                   = $this->input->post('key1');
            $key2                   = $this->input->post('key2');
            $key3                   = $this->input->post('key3');
            $key4                   = $this->input->post('key4');
            for($i=0;$i<sizeof($access_name);$i++){
                $data['apps_id']                = $apps_id;
                $data['access_name']            = $access_name[$i];
                $data['host_name']              = $host_name[$i];
                $data['ip_address']             = $ip_address[$i];
                $data['username']               = $username[$i];
                $data['email']                  = $email[$i];
                $data['password']               = $password[$i];
                $data['api_key']                = $api_key[$i];
                $data['access_token']           = $access_token[$i];
                $data['secret_key']             = $secret_key[$i];
                $data['key1']                   = $key1[$i];
                $data['key2']                   = $key2[$i];
                $data['key3']                   = $key3[$i];
                $data['key4']                   = $key4[$i];

                $this->db->insert('access', $data);
                //var_dump($data);
            }            
        
        $this->session->set_flashdata('success', 'Access added successed.');
        redirect(base_url() . 'index.php?admin/access/', 'refresh');
            

        }
        $data['page_name']  = 'access_add_bulk';
        $data['page_title'] = 'Manage Device';        
        $this->load->view('admin/index', $data);
        }


    
            /* setting management */ 
    function setting($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_is_login') != 1)
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
             redirect(base_url() . 'index.php?admin/setting/', 'refresh');
        }
            /* change system logo*/ 
        if ($param1 == 'change_logo') {
            move_uploaded_file($_FILES['logo']['tmp_name'], 'uploads/system_logo/logo.png');
            $this->session->set_flashdata('success', 'Logo change successed');
            redirect(base_url() . 'index.php?admin/setting/', 'refresh');
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
            $this->load->view('admin/index', $data);
        }
        else{

        	$data['page_name']  = 'manage-setting';
        	$data['page_title'] = 'Genaral Setting';
       		$data['setting_info']   = $this->db->get('config')->result_array();
        	$this->load->view('admin/index', $data);
    }
        
    }


    function manage_user($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '9');
            /* end menu active/inactive section*/ 

            /* add new access */   
        
        if ($param1 == 'add') {
            $data['name']                   = $this->input->post('name');
            $data['username']               = $this->input->post('username');
            $data['password']               = md5($this->input->post('password'));
            $data['email']                  = $this->input->post('email');
            $data['role']                   = $this->input->post('role');           
            
            $this->db->insert('user', $data);
            $this->session->set_flashdata('success', 'User added successed');
            redirect(base_url() . 'index.php?admin/manage_user/', 'refresh');
        }
            /* edit access */ 
        if ($param1 == 'update') {
            $data['name']                   = $this->input->post('name');
            $data['username']               = $this->input->post('username');
            if($this->input->post('password')!='' || $this->input->post('password')!=NULL){
                $data['password']               = md5($this->input->post('password'));
            }
            
            $data['email']                  = $this->input->post('email');
            $data['role']                   = $this->input->post('role');

            $this->db->where('user_id', $param2);
            $this->db->update('user', $data);
            $this->session->set_flashdata('success', 'User update successed.');
            redirect(base_url() . 'index.php?admin/manage_user/', 'refresh');
        }

            /* delete access */        

        if ($param1 == 'delete') {
            $this->db->where('user_id', $param2);
            $this->db->delete('user');
        }
        
            $data['page_name']      = 'user_manage';
            $data['page_title']     = 'User Management';
            $data['users']    = $this->db->get('user')->result_array(); 
            $this->load->view('admin/index', $data);

    }


    function import_excel($param1 = '', $param2 = '')
    {
    if ($this->session->userdata('admin_is_login') != 1)
        redirect(base_url() . 'index.php?login', 'refresh');
    /* start menu active/inactive section*/
    $this->session->unset_userdata('active_menu');
    $this->session->set_userdata('active_menu', '10');
    /* end menu active/inactive section*/
    if ($param1 == 'computer') {
        // filter file extention
        $filter_ext = explode('.', $_FILES['excel_file']['name']);
        $original_ext = $filter_ext[count($filter_ext) - 1];
        if (in_array($original_ext, array('xls','xlsx')))
        {
            move_uploaded_file($_FILES['excel_file']['tmp_name'], 'uploads/computer_import.xlsx');
            include 'simplexlsx.class.php';

            $xlsx = new SimpleXLSX('uploads/computer_import.xlsx');
            list($num_cols, $num_rows) = $xlsx->dimension();
            $f = 0;
            foreach($xlsx->rows() as $r) {

                // Ignore the inital name row of excel file

                if ($f == 0) {
                    $f++;
                    continue;
                }

                for ($i = 0; $i < $num_cols; $i++) {
                    if ($i == 0) $data['type'] = $r[$i];
                    else
                    if ($i == 1) $data['computer_name'] = $r[$i];
                    else
                    if ($i == 2) $data['description'] = $r[$i];
                    else
                    if ($i == 3) $data['processor'] = $r[$i];
                    else
                    if ($i == 4) $data['ram'] = $r[$i];
                    else
                    if ($i == 5) $data['model'] = $r[$i];
                    else
                    if ($i == 6) $data['serial_no'] = $r[$i];
                    else
                    if ($i == 7) {
                        $purchase_date = $r[$i];
                        $timestamp = $this->PurchaseDate($purchase_date);
                        $date_f = date('Y-m-d', $timestamp);
                        $data['purchase_date'] = $date_f;
                    }
                    else
                    if ($i == 8) {
                        $warranty_duration = $r[$i];
                        $data['warranty_duration'] = $r[$i];
                        $data['warranty_end_date'] = date('Y-m-d', strtotime($date_f . ' + ' . $warranty_duration . ' days'));
                    }
                    else
                    if ($i == 9) $data['issue_to'] = $r[$i];
                }

                $this->db->insert('computer', $data);                
            }
            unlink('uploads/computer_import.xlsx');
            $this->session->set_flashdata('success', 'Data imported successed.');
            redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
        }

        $this->session->set_flashdata('error', 'You must select a valid excel file.');
        redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
    }

    if ($param1 == 'device') {
        // filter file extention
        $filter_ext = explode('.', $_FILES['excel_file']['name']);
        $original_ext = $filter_ext[count($filter_ext) - 1];
        if (in_array($original_ext, array('xls','xlsx')))
        {
            move_uploaded_file($_FILES['excel_file']['tmp_name'], 'uploads/device_import.xlsx');
            include 'simplexlsx.class.php';

            $xlsx = new SimpleXLSX('uploads/device_import.xlsx');
            list($num_cols, $num_rows) = $xlsx->dimension();
            $f = 0;
            foreach($xlsx->rows() as $r) {

                // Ignore the inital name row of excel file

                if ($f == 0) {
                    $f++;
                    continue;
                }

                for ($i = 0; $i < $num_cols; $i++) {
                    if ($i == 0) $data['device_name'] = $r[$i];
                    else
                    if ($i == 1) $data['description'] = $r[$i];
                    else
                    if ($i == 2) $data['model'] = $r[$i];
                    else
                    if ($i == 3) $data['serial_no'] = $r[$i];
                    else
                    if ($i == 4) {
                        $purchase_date = $r[$i];
                        $timestamp = $this->PurchaseDate($purchase_date);
                        $date_f = date('Y-m-d', $timestamp);
                        $data['purchase_date'] = $date_f;
                    }
                    else
                    if ($i == 5) {
                        $warranty_duration = $r[$i];
                        $data['warranty_duration'] = $r[$i];
                        $data['warranty_end_date'] = date('Y-m-d', strtotime($date_f . ' + ' . $warranty_duration . ' days'));
                    }
                    else
                    if ($i == 6) $data['issue_to'] = $r[$i];
                }
                $data['category_id']    =      $this->input->post('category_id');

                $this->db->insert('device', $data);                                
            }
            unlink('uploads/device_import.xlsx');
            $this->session->set_flashdata('success', 'Data imported successed.');
            redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
        }

        $this->session->set_flashdata('error', 'You must select a valid excel file.');
        redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
    }

    if ($param1 == 'accessories') {
        // filter file extention
        $filter_ext = explode('.', $_FILES['excel_file']['name']);
        $original_ext = $filter_ext[count($filter_ext) - 1];
        if (in_array($original_ext, array('xls','xlsx')))
        {
            move_uploaded_file($_FILES['excel_file']['tmp_name'], 'uploads/accessories_import.xlsx');
            include 'simplexlsx.class.php';

            $xlsx = new SimpleXLSX('uploads/accessories_import.xlsx');
            list($num_cols, $num_rows) = $xlsx->dimension();
            $f = 0;
            foreach($xlsx->rows() as $r) {

                // Ignore the inital name row of excel file

                if ($f == 0) {
                    $f++;
                    continue;
                }

                for ($i = 0; $i < $num_cols; $i++) {
                    if ($i == 0) $data['accessories_name'] = $r[$i];
                    else
                    if ($i == 1) $data['description'] = $r[$i];
                    else
                    if ($i == 2) $data['model'] = $r[$i];
                    else
                    if ($i == 3) $data['serial_no'] = $r[$i];
                    else
                    if ($i == 4) {
                        $purchase_date = $r[$i];
                        $timestamp = $this->PurchaseDate($purchase_date);
                        $date_f = date('Y-m-d', $timestamp);
                        $data['purchase_date'] = $date_f;
                    }
                    else
                    if ($i == 5) {
                        $warranty_duration = $r[$i];
                        $data['warranty_duration'] = $r[$i];
                        $data['warranty_end_date'] = date('Y-m-d', strtotime($date_f . ' + ' . $warranty_duration . ' days'));
                    }
                    else
                    if ($i == 6) $data['issue_to'] = $r[$i];
                }
                

                $this->db->insert('accessories', $data);                                
            }
            unlink('uploads/accessories_import.xlsx');
            $this->session->set_flashdata('success', 'Data imported successed.');
            redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
        }

        $this->session->set_flashdata('error', 'You must select a valid excel file.');
        redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
    }

    if ($param1 == 'access') {
        // filter file extention
        $filter_ext = explode('.', $_FILES['excel_file']['name']);
        $original_ext = $filter_ext[count($filter_ext) - 1];
        if (in_array($original_ext, array('xls','xlsx')))
        {
            move_uploaded_file($_FILES['excel_file']['tmp_name'], 'uploads/access_import.xlsx');
            include 'simplexlsx.class.php';

            $xlsx = new SimpleXLSX('uploads/access_import.xlsx');
            list($num_cols, $num_rows) = $xlsx->dimension();
            $f = 0;
            foreach($xlsx->rows() as $r) {

                // Ignore the inital name row of excel file

                if ($f == 0) {
                    $f++;
                    continue;
                }

                for ($i = 0; $i < $num_cols; $i++) {
                    if ($i == 0) $data['access_name'] = $r[$i];
                    else
                    if ($i == 1) $data['host_name'] = $r[$i];
                    else
                    if ($i == 2) $data['ip_address'] = $r[$i];
                    else
                    if ($i == 3) $data['username'] = $r[$i];
                    else
                    if ($i == 4) $data['email'] = $r[$i];
                    else
                    if ($i == 5) $data['password'] = $r[$i];
                    else
                    if ($i == 6) $data['api_key'] = $r[$i];
                    else
                    if ($i == 7) $data['secret_key'] = $r[$i];
                    else
                    if ($i == 8) $data['access_token'] = $r[$i];
                    else
                    if ($i == 9) $data['key1'] = $r[$i];
                    else
                    if ($i == 10) $data['key2'] = $r[$i];
                    else
                    if ($i == 11) $data['key3'] = $r[$i];
                    else
                    if ($i == 12) $data['key4'] = $r[$i];
                    
                }
                $data['apps_id']    =      $this->input->post('apps_id');

                $this->db->insert('access', $data); 
                //var_dump($data);                               
            }
            unlink('uploads/access_import.xlsx');
            $this->session->set_flashdata('success', 'Data imported successed.');
            redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
        }

        $this->session->set_flashdata('error', 'You must select a valid excel file.');
        redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
    }


    if ($param1 == 'ip') {
        // filter file extention
        $filter_ext = explode('.', $_FILES['excel_file']['name']);
        $original_ext = $filter_ext[count($filter_ext) - 1];
        if (in_array($original_ext, array('xls','xlsx')))
        {
            move_uploaded_file($_FILES['excel_file']['tmp_name'], 'uploads/ip_import.xlsx');
            include 'simplexlsx.class.php';

            $xlsx = new SimpleXLSX('uploads/ip_import.xlsx');
            list($num_cols, $num_rows) = $xlsx->dimension();
            $f = 0;
            foreach($xlsx->rows() as $r) {

                // Ignore the inital name row of excel file

                if ($f == 0) {
                    $f++;
                    continue;
                }

                for ($i = 0; $i < $num_cols; $i++) {
                    if ($i == 0) $data['host_name'] = $r[$i];
                    else
                    if ($i == 1) $data['ipv4'] = $r[$i];
                    else
                    if ($i == 2) $data['ipv6'] = $r[$i];
                    else
                    if ($i == 3) $data['mac'] = $r[$i];
                    else
                    if ($i == 4) $data['subnet'] = $r[$i];
                    else
                    if ($i == 5) $data['gateway'] = $r[$i];
                    else
                    if ($i == 6) $data['dns1'] = $r[$i];
                    else
                    if ($i == 7) $data['dns2'] = $r[$i];
                    
                }
                //var_dump($data);              

                $this->db->insert('ip', $data);                                
            }
            unlink('uploads/ip_import.xlsx');
            $this->session->set_flashdata('success', 'Data imported successed.');
            redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
        }

        $this->session->set_flashdata('error', 'You must select a valid excel file.');
        redirect(base_url() . 'index.php?admin/import_excel/', 'refresh');
    }



    $data['page_name'] = 'import_excel';
    $data['page_title'] = 'Import data from excel';
    $this->load->view('admin/index', $data);
}

//date format
    function PurchaseDate($dateValue = 0, $ExcelBaseDate=0) {
    if ($ExcelBaseDate == 0) {
        $myExcelBaseDate = 25569;
        //  Adjust for the spurious 29-Feb-1900 (Day 60)
        if ($dateValue < 60) {
            --$myExcelBaseDate;
        }
    } else {
        $myExcelBaseDate = 24107;
    }

    // Perform conversion
    if ($dateValue >= 1) {
        $utcDays = $dateValue - $myExcelBaseDate;
        $returnValue = round($utcDays * 86400);
        if (($returnValue <= PHP_INT_MAX) && ($returnValue >= -PHP_INT_MAX)) {
            $returnValue = (integer) $returnValue;
        }
    } else {
        $hours = round($dateValue * 24);
        $mins = round($dateValue * 1440) - round($hours * 60);
        $secs = round($dateValue * 86400) - round($hours * 3600) - round($mins * 60);
        $returnValue = (integer) gmmktime($hours, $mins, $secs);
    }

    // Return
    return $returnValue;
}
//date format END



  /* database backup and restore management */ 
    function backup_restore($operation = '', $type = '')
    {

        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');
            /* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            $this->session->set_userdata('active_menu', '11');
            /* end menu active/inactive section*/   
        
        if ($operation == 'create') {
            
            $this->common_model->create_backup();
        }
        if ($operation == 'restore') {
            $this->common_model->restore_backup();
            $this->session->set_flashdata('backup_message', 'Backup Restored');
            redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
        }
        if ($operation == 'delete') {
            $this->crud_model->truncate($type);
            $this->session->set_flashdata('backup_message', 'Data removed');
            redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
        }
        
        	$data['page_info']  = 'Create backup / restore from backup';
        	$data['page_name']  = 'backup_restore';
        	$data['page_title'] = 'Manage Backup and Restore';
        	$this->load->view('admin/index', $data);
    }

    


    
    


    function category($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');       
        
        if ($param1 == 'add') {
            
            $data['category_name']        = $this->input->post('category_name');
            $data['category_desc']        = $this->input->post('category_desc');        
            
            
            $this->db->insert('category', $data);
            $this->session->set_flashdata('success', 'Category added successed');
            redirect(base_url() . 'index.php?admin/device/', 'refresh');
        }
        if ($param1 == 'update') {
            $data['category_name']        = $this->input->post('category_name');
            $data['category_desc']        = $this->input->post('category_desc');            

            $this->db->where('category_id', $param2);
            $this->db->update('category', $data);
            $this->session->set_flashdata('success', 'Category update successed.');
            redirect(base_url() . 'index.php?admin/device/', 'refresh');
        }
        

        if ($param1 == 'delete') {
            $this->db->where('category_id', $param2);
            $this->db->delete('category');
        }


    }

    function apps($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');       
        
        if ($param1 == 'add') {
            
            $data['apps_name']        = $this->input->post('apps_name');
            $data['apps_desc']        = $this->input->post('apps_desc');        
            
            
            $this->db->insert('apps', $data);
            $this->session->set_flashdata('success', 'apps added successed');
            redirect(base_url() . 'index.php?admin/access/', 'refresh');
        }
        if ($param1 == 'update') {
            $data['apps_name']        = $this->input->post('apps_name');
            $data['apps_desc']        = $this->input->post('apps_desc');            

            $this->db->where('apps_id', $param2);
            $this->db->update('apps', $data);
            $this->session->set_flashdata('success', 'apps update successed.');
            redirect(base_url() . 'index.php?admin/access/', 'refresh');
        }
        

        if ($param1 == 'delete') {
            $this->db->where('apps_id', $param2);
            $this->db->delete('apps');
        }


    }



    function brand($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');       
        
        if ($param1 == 'add') {
            
            $data['brand_name']        = $this->input->post('brand_name');
            $data['description']        = $this->input->post('description');        
            
            
            $this->db->insert('brand', $data);
            $this->session->set_flashdata('success', 'brand added successed');
            redirect(base_url() . 'index.php?admin/setting/utility/', 'refresh');
        }
        if ($param1 == 'update') {
            $data['brand_name']        = $this->input->post('brand_name');
            $data['description']        = $this->input->post('description');            

            $this->db->where('brand_id', $param2);
            $this->db->update('brand', $data);
            $this->session->set_flashdata('success', 'brand update successed.');
            redirect(base_url() . 'index.php?admin/setting/utility/', 'refresh');
        }
        

        if ($param1 == 'delete') {
            $this->db->where('brand_id', $param2);
            $this->db->delete('brand');
        }


    }


    function supplier($param1 = '', $param2 = ''){
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url(), 'refresh');       
        
        if ($param1 == 'add') {
            
            $data['supplier_name']        = $this->input->post('supplier_name');
            $data['supplier_address']        = $this->input->post('supplier_address');
            $data['supplier_phone']        = $this->input->post('supplier_phone');
            $data['supplier_email']        = $this->input->post('supplier_email');        
            
            
            $this->db->insert('supplier', $data);
            $this->session->set_flashdata('success', 'supplier added successed');
            redirect(base_url() . 'index.php?admin/setting/utility/', 'refresh');
        }
        if ($param1 == 'update') {
            $data['supplier_name']        = $this->input->post('supplier_name');
            $data['supplier_address']        = $this->input->post('supplier_address');
            $data['supplier_phone']        = $this->input->post('supplier_phone');
            $data['supplier_email']        = $this->input->post('supplier_email');            

            $this->db->where('supplier_id', $param2);
            $this->db->update('supplier', $data);
            $this->session->set_flashdata('success', 'supplier update successed.');
            redirect(base_url() . 'index.php?admin/setting/utility', 'refresh');
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
        	$this->load->view('admin/'.$page_name.'.php' ,$data);
        
        
    }


    function manage_profile(){
        	/* start menu active/inactive section*/
            $this->session->unset_userdata('active_menu');
            /* end menu active/inactive section*/ 
        	$data['page_name']  = 'manage_profile';
        	$data['page_title'] = 'Update profile information';
        	$data['profile_info']  = $this->db->get_where('user', array(
            'user_id' => $this->session->userdata('user_id')))->result_array();
        	$this->load->view('admin/index', $data);
    }


    function profile($param1 = '', $param2 = '', $param3 = '')
    {
        	$user_id=$this->session->userdata('user_id');
        if ($this->session->userdata('admin_is_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1 == 'update') {
            $data['name']  = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            
            $this->db->where('user_id', $user_id);
            $this->db->update('user', $data);
            $this->common_model->clear_cache();
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/user_image/' .$user_id.'.jpg');
            $this->common_model->clear_cache();
            $this->session->set_flashdata('success', 'Profile information updated.');
            redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
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
            redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
        }
    }    
}
