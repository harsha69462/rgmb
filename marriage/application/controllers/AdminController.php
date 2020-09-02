<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function logout(){
		$this->session->unset_userdata('admin');
		$_SESSION['loggedin'] = null;
		redirect(base_url());
	}

	public function login(){
		if (isset($_SESSION['loggedin'])) {
			redirect(base_url('admin/adminpage'));
		}else {
			$this->load->library('form_validation');
			$this->load->model('LoginModel');
			$this->form_validation->set_rules("email", "anything", "required");
			$this->form_validation->set_rules("password", "Password", "required");

			if($this->form_validation->run() !== FALSE){
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$flag = $this->LoginModel->checkCred($email, $password);
				if ($flag) {
					$this->session->admin = $email;
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['wrong'] = null;
					redirect(base_url('admin/adminpage'));
				} else{
					$this->session->set_flashdata("wrong", "Check your Credentials!");
				}
			}
			$this->load->view('admin/adminlogin');
		}
	}


  public function dashboard(){
		if (isset($_SESSION['loggedin'])) {

    $this->load->model('DashboardModel');
    $row = $this->DashboardModel->getUserData();
    $user_details = [];
		$user_details['mdarray'] = $row;

    $this->load->view('admin/adminpage', $user_details);
	} else{
		redirect(base_url("admin"));
	}
  }

	public function matches(){
		$this->load->model('DashboardModel');
		$male = $this->DashboardModel->getMaleData();
		$female = $this->DashboardModel->getFemaleData();
		$data = [];
		$data['male'] = $male;
		$data['female'] = $female;
		$this->load->view('admin/matches', $data);
	}

	public function exchange(){
		$this->load->library('form_validation');
		$this->load->model('MatchesModel');
		$this->form_validation->set_rules('malear', "Male Profiles", "required");
		$this->form_validation->set_rules('femalear', "Female Profiles", "required");

		if ($this->form_validation->run() !== false) {
			$male_profile = $this->input->post('malear');
			$female_profile = $this->input->post('femalear');
			$flag = $this->MatchesModel->match($male_profile, $female_profile);
		}

		redirect(base_url('admin/matches'));
	}


	public function news(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("title", "Title", "required");
		$this->form_validation->set_rules("date", "Date", "required");
		$this->form_validation->set_rules("name", "Update", "required");
		if ($this->form_validation->run() !== false) {
			$title = $this->input->post('title');
			$date = $this->input->post('date');
			$news = $this->input->post('name');

			$data = array(
				'title' => $title,
				'date' => $date,
				'newsupdate' => $news
			);
			$this->db->insert("news", $data);

		}



		$this->load->view('admin/news');
	}


}

?>
