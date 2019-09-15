<?php 

class Userlogin extends CI_Model
{
	public function getUsers()
	{
		$this->load->database();
		$q = $this->db->query('select * from all_students');
		return $q->result_array();
	}
}