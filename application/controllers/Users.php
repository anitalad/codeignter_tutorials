<?php
/**
* 
*/
class Users extends CI_Controller {
	
	public function getUsersData() {
		
		$data['users'] = $this->UsersModel->getusers();

		$this->load->view('Users', $data);

		$this->load->helper('array');

		$arr = ['test1'=>'test2','test3'=>'test4'];
		echo element('test5',$arr,'not found');

		echo custom_array_helper();
	}
}
?>