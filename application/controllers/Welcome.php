<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this -> load ->model('queries');
	 	$chkAdminExist = $this->queries -> chkAdminExist();
	 	$this->load->view('home', ['chkAdminExist' => $chkAdminExist] );
	}
	 public function adminRegister(){
	 	$this -> load ->model('queries');
	 	$roles = $this->queries -> getRoles();
	 	/*print_r($roles);
	 	exit();*/
	 	$this->load->view('register', ['roles' => $roles] );
	 }

	 public function login(){
	 	echo 'Login';
	 }

	 public function adminSignup(){
	 	$this->form_validation->set_rules('username', 'Username', 'Required');
	 	$this->form_validation->set_rules('email', 'Email', 'Required');
	 	$this->form_validation->set_rules('gender', 'Gender', 'Required');
	 	$this->form_validation->set_rules('role_id', 'Role', 'Required');
	 	$this->form_validation->set_rules('password', 'Password', 'Required');
	 	$this->form_validation->set_rules('confirmpwd', 'ConfirmPwd', 'Required');
	 	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
	 	if($this->form_validation->run()){
	 		$data = $this->input->post();
	 		$data['password'] = sha1($this->input->post('password'));
	 		$this->load->model('queries');
	 		if( $this->queries->registerAdmin($data) ){
	 			$this->session->set_flashdata('message', 'Admin Registered Successfully');
	 			return redirect("welcome/adminRegister");
	 		}
	 		else
	 		{ 
             $this->session->set_flashdata('message', 'Failed to Register Admin!');
	 		 return redirect("welcome/adminRegister");
	 		}

	 	}else{
	 		//echo validation_errors();
	 		$this-> adminRegister();

	 	}
}
}
?>
