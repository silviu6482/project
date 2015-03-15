<?php

class Dashboard extends CI_Controller
{
	public $user;

	public function __construct()
	{
		parent:: __construct();
		$user_id = $this->session->userdata('user_id');
		$this->load->model('user_model');
		if(!$user_id)
		{
			$this->logout();
		}
	 $user = $this->user_model->get($user_id);
	 $this->user = $user[0];
	 //var_dump($user);

	}

	public function index()
	{
		$data = array('user_data' => $this->user);
		$this->load->view('dashboard/inc/header_view', $data);
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('dashboard/inc/footer_view');
		//var_dump($this->user);
	}

	public function logout()
	{

		$this->session->sess_destroy();
		//session_destroy();
		redirect('/');

	}

	public function users(){

		$data = array('user_data' => $this->user);
		$this->load->view('dashboard/inc/header_view', $data);

		$users = $this->user_model->get();
		$data = array('users' => $users);
		$this->load->view('dashboard/user_admin_view', $data);
		$this->load->view('dashboard/inc/footer_view');
	}

	public function user_update($user_id){

		$data = array('user_data' => $this->user);
		$this->load->view('dashboard/inc/header_view', $data);

		$user_update = $this->user_model->get($user_id);
		$data = array('users' => $user_update);
		$this->load->view('dashboard/user_admin_update_view', $data);
		$this->load->view('dashboard/inc/footer_view');
	}
}