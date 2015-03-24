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

	public function gallery()
	{
		$this->load->view('home/inc/header_view');
		$this->load->view('home/gallery_view', array('error' => ' ' ));
		$this->load->view('home/inc/footer_view');
	}

	public function doupload() {
		//pr($_FILES);
		$config = array();

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '0';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			pr($error);
			$this->load->view('home/gallery_view', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$this->load->view('home/inc/header_view');
			$this->load->view('home/gallery_view', $data);
			$this->load->view('home/inc/footer_view');
		}

		// $name_array = array();
		// $count = count($_FILES['userfile']['size']);
		// foreach($_FILES as $key=>$value)
		// 	for($s=0; $s<=$count-1; $s++) {
		// 		$_FILES['userfile']['name']			= $value['name'][$s];
		// 		$_FILES['userfile']['type']    		= $value['type'][$s];
		// 		$_FILES['userfile']['tmp_name'] 	= $value['tmp_name'][$s];
		// 		$_FILES['userfile']['error']       	= $value['error'][$s];
		// 		$_FILES['userfile']['size']    		= $value['size'][$s];   
		// 		    $config['upload_path'] 		= './uploads/';
		// 			$config['allowed_types'] 	= 'gif|jpg|png';
		// 			$config['max_size']			= '0';
		// 			$config['max_width']  		= '1024';
		// 			$config['max_height']  		= '768';
		// 		$this->load->library('upload', $config);
		// 		$this->upload->do_upload();
		// 		$data = $this->upload->data();
		// 		$name_array[] = $data['file_name'];
		// 	}
		// 	pr($name_array);
		// 	$names= implode(',', $name_array);
		// 	$this->load->database();
		// 	$db_data = array('id'=> NULL,
		// 					 'name'=> $names);
		// 	$this->db->insert('gallery',$db_data);
		// 	print_r($names);
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
