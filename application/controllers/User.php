<?php

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("User_m");
	}
	public function form(){
		$this->load->view('form_User_v'); 
  }
  public function add(){
	$data = array(
		"username" => $this->input->post("username"),
		"password" => $this->input->post("password"),
		"fullname" => $this->input->post("fullname"),
		"level" => $this->input->post("level")  
	);
	var_dump($data);
	$this->User_m->add($data);	
  }
}