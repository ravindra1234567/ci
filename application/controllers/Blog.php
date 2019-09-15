<?php

class Blog extends CI_Controller
{
	public function index()
	{
		
		$this->load->model('Userlogin','ul');
		$data['users'] = $this->ul->getUsers();
		$this->load->view('userlist',$data);
		//$this->load->view("blog");
	} 
}

?>