<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('common/crud_lib');
        $this->crud_lib->check_install();
        $this->load->library(array('ion_auth', 'form_validation'));
        
        if(!isset($_SESSION["language"])){
            $siteLang = $this->session->userdata('site_lang');
        }else{ 
            $siteLang = $_SESSION["language"]; 
        }
		
		if ($siteLang) { 
			$this->load->library('common/language','modules/welcome/language/'.$siteLang); // Language Class
			$this->language->load('welcome/welcome'); // Module language library
			$this->config->set_item('language',$siteLang);
			
			$this->lang->load($siteLang,$siteLang); // General library of the framework language
       } else {
		    $this->load->library('common/language','modules/welcome/language/english'); // Language Class
			$this->language->load('welcome/welcome'); // Module language library
			
			$this->lang->load('english','english'); // General library of the framework language
       }
	}
	
	
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error($this->lang->line('text_error_1'), '', $heading = $this->lang->line('text_error_h'));
		}
		else
		{
			
            $data = array(
				'title' => $this->lang->line('text_language'),
				'text_profile' => $this->lang->line('text_profile'),
				'st_1' => $this->language->get('1_st'),
				'st_2' => $this->language->get('2_st'),
				'st_3' => $this->language->get('3_st'),
				'st_4' => $this->language->get('4_st'),
				'text_user_guide' => $this->language->get('text_user_guide'),
			);
            
            
            $data['users'] = $this->crud_lib->select('users');
            //select('users') where array('ip_address'=>'127.0.0.1') order_by 'id ASC' or 'DESC'
            //$data['users'] = $this->crud_lib->select('users',array('ip_address'=>'127.0.0.1'),'id DESC');
            
            //$dat = array(
			//	'first_name' => 'Admin',
            //    'last_name' => 'Members',
			//	'email' => 'admin@admin.com'
			//);
            //$this->crud_lib->insert('users',$dat);
            //$this->crud_lib->delete('users','6');
            //$this->crud_lib->update('users','2',$dat);
            
			$this->load->view('admin_message', $data);
		}
		
	}
	
	
	
	
}
