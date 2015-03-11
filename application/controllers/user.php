<?php

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login()
	{
		$login = $this->input->post('login');
		$password = $this->input->post('password');

		$result = $this->user_model->get([
			'login' => $login,
			'password' => hash('sha256', $password . SALT)
		]);

		$this->output->set_content_type('application_json');

		if ($result) {
			$this->session->set_userdata(['user_id' => $result[0]['user_id']]);
			$this->output->set_output(json_encode(['result' => 1]));
			return false;
		}

		$this->output->set_output(json_encode(['result' => 0]));
	}

	public function register()
	{
		$this->output->set_content_type('application_json');

		$this->form_validation->set_rules('login','Login','required|min_length[4]|max_length[16]|is_unique[user.login]');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password','Password','required|min_length[4]|max_length[16]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password','Confirm password','required');

		$this->form_validation->set_message('required', 'Ai uitat ceva?');
		$this->form_validation->set_message('valid_email', 'Nu ai o alta adresa de email?');
		$this->form_validation->set_message('matches[confirm_password]', 'Parolele nu sunt identice!');


		if($this->form_validation->run() == false)
		{
			$this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
			return false;
		}

		$login = $this->input->post('login');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');

		$user_id = $this->user_model->insert(['login' => $login, 'email' => $email, 'password' => hash('sha256', $password . SALT)]);

		//echo($user_id);	
		//die('not yet ready');


		if ($user_id) {
			$this->session->set_userdata(['user_id' => $user_id]);
			$this->output->set_output(json_encode(['result' => 1]));
			return false;
		}

		$this->output->set_output(json_encode(['result' => 0, 'error' => 'Utilizatorul nu a fost creat']));
	}

	public function test_get()
	{		
		$data = $this->user_model->get(1);
		print_r($data);
	}

	public function test_insert()
	{		
		$result = $this->user_model->insert([
			'login' => 'Test insert'
		]);
		print_r($result);

		//debuging purposes $this->output->enable_profiler(true);
	}
	
	public function test_update()
	{
		$result = $this->user_model->update([
			'login' => 'Test update'
		], 3);
		print_r($result);
	}
	
	public function test_delete()
	{
		$result = $this->user_model->delete(4);
		print_r($result);
	}

}