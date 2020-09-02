<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function encrypt($password){
		$hash = password_hash($password,PASSWORD_BCRYPT);
		return $hash;
	}

	public function register(){
    $this->load->library('form_validation');
    $this->load->model('RegisterModel');

    $this->form_validation->set_rules("fullname", "Fullname", "required");
    $this->form_validation->set_rules("password", "Password", "required");
    $this->form_validation->set_rules("confirm", "Password", "required|matches[password]");
    $this->form_validation->set_rules("email", "Email-Id", "required|is_unique[user_details.email]");
		$this->form_validation->set_rules("phone", "Number", "required|max_length[10]|min_length[10]");
		$this->form_validation->set_rules("dob", "DOB", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");


    if ($this->form_validation->run() !== FALSE) {
      $fullname = $this->input->post('fullname');
      $pass = $this->input->post('password');
			$password = $this->encrypt($pass);
      $email = $this->input->post('email');
      $phone = $this->input->post('phone');
      $dob = $this->input->post('dob');
      $gender = $this->input->post('gender');
	    $age = (date('Y') - date('Y',strtotime($dob)));

      $res = $this->RegisterModel->addRow($fullname, $password, $email, $phone, $dob, $age, $gender);

      if ($res) {
        redirect(base_url('login'));
      } else {

      }
    }
    $this->load->view('account/user/register');
  }//register function ends
}


?>
