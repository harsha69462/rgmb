<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UdashboardController extends CI_Controller {


	public function index()
	{
    $this->load->model('DashboardModel');
    $row = $this->DashboardModel->getUserData();
    $data = [];
    $data['mdarray'] = $row;
		$this->load->view('userAccount/dashboard/userDashboard', $data);
	}
}

?>
