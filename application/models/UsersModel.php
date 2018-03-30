<?php
class UsersModel extends CI_Model {

	public function getUsers(){
		//$this->load->database();
		
		$q = $this->db->select()
					  ->where('id',1)
					  ->get('users');

		return $result = $q->result_array();

		/*echo "<pre>";
		print_r($result);
		echo "</pre>";*/

		
	}
	
}
?>
