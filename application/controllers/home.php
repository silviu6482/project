<?php

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('home/inc/header_view');
		$this->load->view('home/home_view');
		$this->load->view('home/inc/footer_view');
	}

	public function register()
	{
		$this->load->view('home/inc/header_view');
		$this->load->view('home/register_view');
		$this->load->view('home/inc/footer_view');
	}

	public function reset_pass()
	{
		$this->load->view('home/inc/header_view');
		$this->load->view('home/reset_pass_view');
		$this->load->view('home/inc/footer_view');
	}

	public function login()
	{
		$this->load->view('home/inc/header_view');
		$this->load->view('home/login_view');
		$this->load->view('home/inc/footer_view');
	}

	public function about()
	{
		$this->load->model('user_model');
		$result = $this->user_model->get_content();
		$this->load->view('home/inc/header_view');
		$this->load->view('home/about_view');
		$this->load->view('home/inc/footer_view');
	}

	public function contact()
	{
		$this->load->view('home/inc/header_view');
		$this->load->view('home/contact_view');
		$this->load->view('home/inc/footer_view');
	}

	// public function code()
	// {
	// 	echo hash('sha256', 'custom' . SALT);
	// }

	// 	public function test()
	// 	{
	// 	$this->db->select('user_id, login, password');
	// 	$this->db->from('user');
	// 	$this->db->where(['user_id' => 1]);
	// 	$q = $this->db->get();
 	//  alternative without from method $q = $this->db->get('user');
	// 	print_r($q->result());

	//	db insert
	// 	$this->db->insert('user', [
	// 	'login' => 'Tom'			
	// 	]);

	// 	db update
	// 	$this->db->where(['user_id' => 4]);
	// 	$this->db->update('user', [
	// 	'login' => 'Jerry'
	// 	]);

	//	db delete
	// 	$this->db->where(['user_id' => 4]);
	// 	$this->db->delete('user');
	// 	or an alternative
	// 	$this->db->delete('user', ['user_id' => 4]);
	//	}	
}
