<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller404 extends MX_Controller  {
    public function __construct() {
        parent::__construct();
        $siteLang = $this->session->userdata('site_lang');
		
		if ($siteLang) { 
			$this->config->set_item('language',$siteLang);
			$this->lang->load($siteLang,$siteLang); // General library of the framework language
       } else {
			$this->lang->load('english','english'); // General library of the framework language
       }
    }
 
    public function show_error(){
        $this->output->set_status_header('404');
        $data = array(//$this->lang->line('text_error_main_1')
                'heading' => $this->lang->line('text_error_main_1'),
                'message' => $this->lang->line('text_error_main_2'),
                'message2' => sprintf($this->lang->line('text_error_main_3'), base_url()),
            );
        $this->load->view('my404page', $data);
    }
}