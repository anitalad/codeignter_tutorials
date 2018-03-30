<?php
class UsersModel extends CI_Model {

	public function getUsers(){
		$this->load->database();
		//print_r($this->db);

		$q = $this->db->query('select * from users');

		return $result = $q->result_array();

		/*echo "<pre>";
		print_r($result);
		echo "</pre>";*/

		
	}
	
}
?>
