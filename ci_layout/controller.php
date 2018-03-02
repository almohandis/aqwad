<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Controller extends MY_Controller {
	public $table = '';
	public function __construct() {
		parent::__construct();
		$this -> load -> model('user_model');
		
		 if(is_null($this->layout)){
            $this->layout = "admin/view";
        }   
	
	}

	public function index() {
		
		$result = $this->user_model->get_all();
		foreach($result as $row) {
		 foreach($row as $key => $value) {
			 
			 if($value === NULL){
				 $row->$key = "";
			 }
			
		   }
		}
		$header = array();
		$footer = array();
		$page_title = 'المستخدمين';
		$header['TITLE'] = 'المستخدمين';
		$content = '';
		$counter = 0;											
											foreach($result as $row) {
												++$counter;
												  $content = $content.'<tr><td>'.$counter.'</td><td>'.$row->user_name.'</td></tr>';	
												}
													
			
$css = array(
		 '<link href="'.config_item('base_url').'assets/template/dist/css/style.css" rel="stylesheet" type="text/css">'
		 );
			
		$js  = array(
		'<script src="'.config_item('base_url').'assets/template/vendors/bower_components/jquery/dist/jquery.min.js"></script>',
		);
		
		$header['CSS'] = $css;
		
		$footer['JS'] = $js;
		$this->data['CONTENT'] = $content;
		$this->data['HEADER'] = $header;
		$this->data['FOOTER'] = $footer;
		
		$this->page = "admin/view";
		$this->layout = "admin/view";
		$this->draw_layout();
	
	}
	
}
?>