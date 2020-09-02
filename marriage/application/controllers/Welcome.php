<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$query = $this->db->query("select * from news");
		$row = $query->result_array();
		$data['news'] = $row;

		$this->load->view('home', $data);
	}


	public function about(){
		$this->load->view('about');
	}

	public function contact(){
		$this->load->view('contact');
	}

}

?>
