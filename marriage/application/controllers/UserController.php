<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {


	public function profile(){
		if (isset($_SESSION['loggedin'])) {
			$this->load->model('ProfileModel');
			$var = $this->ProfileModel->getCred($_SESSION['username']);
			$data['user'] = $var;
			$this->load->view('account/user/profile', $data);
		} else{
			redirect(base_url('login'));
		}
	}


	public function settings(){
		$this->load->view('account/user/settings');
	}

	public function delete(){
		$this->db->where('email', $_SESSION['username']);
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('loggedin');
		$this->db->delete("user_details");

		redirect(base_url(''));
	}


	public function propicchange(){

		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 15000;

		$this->load->library('upload', $config);
		$data['error'] = "";
		if ( ! $this->upload->do_upload('profile-photo')){
			if(isset($_FILES['profile-photo'])){
				$data['error'] = $this->upload->display_errors();
			}
		}
		else{
			$data =  $this->upload->data();
			$this->db->where("email", $_SESSION['username']);
			$data_pro_pic = array("propic" => $data['file_name']);
			$this->db->update("user_details", $data_pro_pic);

		}
		redirect(base_url('user/profile'),"refresh");
	}


	public function profileupdate(){
		$this->load->model('ProfileModel');
		$this->load->library('form_validation');
		$this->form_validation->set_rules("phone", "Phone","max_length[10]|min_length[10]");

		if ($this->form_validation->run() !== false) {
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');
			$occupation = $this->input->post('occupation');
			$salary = $this->input->post('salary');
			$cast = $this->input->post('cast');
			$religion = $this->input->post('religion');
			$hobbies = $this->input->post('hobbies');
			$requirement = $this->input->post('requirement');

			$res = $this->ProfileModel->updateRow($this->session->username, $phone, $address, $occupation, $salary, $cast, $religion, $hobbies, $requirement);
			redirect(base_url('user/profile'));
		}
	}


	public function logout(){
		$_SESSION['loggedin'] = null;
		$this->session->unset_userdata('username');
		redirect(base_url());
	}


	public function match(){
		$this->load->model('ProfileModel');
		$email = $_SESSION['username'];
		$query = $this->db->query("select mymatches_id from user_details where email='$email'");
		$res = $query->result_array();
		$str_arr = explode(",",$res[0]['mymatches_id']);
		$data = $this->ProfileModel->getMatchId($str_arr);
		$user_matches['matches'] = $data;
		$this->load->view("account/user/mymatches", $user_matches);
	}
}

?>
