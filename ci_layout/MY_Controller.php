<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

 class MY_Controller extends CI_Controller{
	
  //private $CI = NULL;     
  protected $layout = NULL; 
  protected $data = array();  
  public function __construct()  
  { 
    parent::__construct();
     //$this->CI =& get_instance(); 
	 if(is_null($this->layout)){
        $this->layout = 'template/page';
     }   		
  } 
  
   public function draw_layout()
   {	  
	  $this->template['header'] = $this->load->view('template/header', $this->data, TRUE);
	  $this->template['sidebar'] = $this->load->view('template/sidebar', $this->data, TRUE);
	  $this->template['footer'] = $this->load->view('template/footer', $this->data, TRUE);
	  $this->template['nav'] = $this->load->view('template/nav', $this->data, TRUE);
	  $this->template['page'] = $this->load->view('template/page', $this->data, TRUE);
	  $this->load->view($this->layout, $this->template);	 
   }
  		
}