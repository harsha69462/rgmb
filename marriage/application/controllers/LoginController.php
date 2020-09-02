<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function checkPassword($password, $db_pass){
	    $auth = password_verify($password,$db_pass);

	    if ($auth) {
	     return true;
	    }else{
	      return false;
	    }
	  }

	public function login(){
		if (isset($_SESSION['loggedin']) ) {
			redirect(base_url('user/profile'));
		} else{
			$this->load->library('form_validation');
			$this->load->model('UserLoginModel');
			$this->form_validation->set_rules("email", "Email-id", "required");
			$this->form_validation->set_rules("password", "Password", "required");

			if($this->form_validation->run() !== FALSE){
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$row = $this->UserLoginModel->user_check($email, $password);

				$db_pass =  $row[0]['password'];
				$flag = $this->checkPassword($password, $db_pass);

				if ($flag) {
					$this->session->username = $email;
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['wrong'] = null;
					redirect(base_url('user/profile'));
				} else{
					$this->session->set_flashdata("wrong", "Check your Credentials!");
				}
			}
			$this->load->view('account/user/login');
		}

	}
}

?>
