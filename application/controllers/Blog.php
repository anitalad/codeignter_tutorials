<?php

class Blog extends CI_Controller {

	public function index(){
		//echo "In index blog controller";
		$this->load-model('abc');
		$this->load->view('blog_index');
	}

	public function add(){
		echo "Add blog in a controller";
	} 
}
?>