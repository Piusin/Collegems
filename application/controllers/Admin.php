<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_Controller{

	public function dashboard(){
		$this->load->view('dashboard');
	}

	public function addCollege(){
		$this->load->view("addCollege");
	}

	public function addStudent(){
        $this->form_validation->set_rules('collegename', 'College Name', 'required');
	 	$this->form_validation->set_rules('branch', 'Branch', 'required');
	 	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	 	if($this->form_validation->run()){
	 		echo "Validation Passed";
	 	}
	 	else{
	 		echo validation_errors();
	 	}
	}

	public function createCollege(){
		$this->form_validation->set_rules('collegename', 'College Name', 'required');
	 	$this->form_validation->set_rules('branch', 'Branch', 'required');
	 	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	 	if($this->form_validation->run()){
	 		$data = $this->input->post();
	 		$this->load->model("queries");
	 		if($this->queries->makeCollege($data)){
	 			$this->session->set_flashdata("message", "College Created Successfully.");
	 		}
	 		else{
	 			$this->session->set_flashdata("message", "Failed to Create College.");
	 		}
	 		return redirect("admin/addCollege");
	 	}
	 	else{
	 		$this->addCollege();
	 	}
	}

	public function addCoadmin(){
		$this -> load ->model('queries');
	 	$roles = $this->queries -> getRoles();
	 	$colleges = $this->queries -> getColleges();
		$this->load->view("addCoadmin", ['roles' => $roles, 'colleges' => $colleges] );
	}

	public function createCoadmin(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('college_id', 'College Name', 'required');
	 	$this->form_validation->set_rules('email', 'Email', 'required');
	 	$this->form_validation->set_rules('gender', 'Gender', 'required');
	 	$this->form_validation->set_rules('role_id', 'Role Id', 'required');
	 	$this->form_validation->set_rules('password', 'Password', 'required');
	 	$this->form_validation->set_rules('confirmpwd', 'Confirm Password', 'required');
	 	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	 	if($this->form_validation->run()){
	 		$data = $this->input->post();
	 		$data['password'] = sha1($this->input->post('password'));
	 		$this->load->model('queries');
	 		if( $this->queries->registerCoadmin($data) ){
	 			$this->session->set_flashdata('message', 'Co Admin Registered Successfully');
	 		}
	 		else
	 		{ 
             $this->session->set_flashdata('message', 'Failed to Register Co Admin!');
	 		}
	 		return redirect("admin/addCoadmin");
	 	}
	 	else{
	 		$this->addCoadmin();

	 	}
	}

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata("user_id"))
			return redirect("welcome/login");
	}
}