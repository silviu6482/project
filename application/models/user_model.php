<?php

class User_model extends CI_Model
{

	/**
	*	@usage (from user controller)
	*	All users: $this->user_model->get()
	*	Single user: $this->user_model->get(2)
	*/

	public function get($user_id = null)
	{
		if ($user_id === null)
		{
			$q = $this->db->get('user');	
		} elseif(is_array($user_id))
		{
			$q = $this->db->get_where('user', $user_id);
		} else {
			$q = $this->db->get_where('user', ['user_id' => $user_id]);
		}

		return $q->result_array();
		
	}

	public function get_by_email($email)
	{		
		$q = $this->db->get_where('user', ['email' => $email]);
		$result = $q->result_array();		
		if (count($result) > 0){
			return $result[0];
		}
		return false;
	}

	/**
	*	@param array $data
	*	@usage (from user controller)
	*	$result = $this->user_model->insert(['login' => 'Test insert']);
	*/

	public function insert($data)
	{
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}
	
	/**
	*	@param array $data
	*	@usage (from user controller)
	*	$result = $this->user_model->update(['login' => 'Test update'], 3);
	*/	
	
	public function update($data, $user_id)
	{
		$this->db->where(['user_id' => $user_id]);
		$this->db->update('user', $data);
		return $this->db->affected_rows();
	}
	
	/**
	*	@param array $data
	*	@usage (from user controller)
	*	$result = $this->user_model->delete(3);
	*/

	public function delete($user_id)
	{
		$this->db->delete('user', ['user_id' => $user_id]);
		return $this->db->affected_rows();
	}

}