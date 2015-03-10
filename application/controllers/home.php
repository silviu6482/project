<?php

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('home/inc/header_view');
		$this->load->view('home/home_view');
		$this->load->view('home/inc/footer_view');
	}

	public function test()
	{
		$this->db->select('user_id, login, password');
		$this->db->from('user');
		$this->db->where(['user_id' => 1]);
		$q = $this->db->get();
		// alternative without from method $q = $this->db->get('user');
		print_r($q->result());
	}	
}
