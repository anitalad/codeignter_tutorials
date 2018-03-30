<?php
/**
* 
*/
class Users extends CI_Controller {
	
	public function getUsersData() {
		$this->load->model('UsersModel');
		$data['users'] = $this->UsersModel->getusers();

		$this->load->view('Users', $data);

		//print_r($data);
	}
}
?>