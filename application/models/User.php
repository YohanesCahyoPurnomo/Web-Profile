<?php 
	/**
	* 
	*/
	class User extends CI_Model
	{
		
		function login($username, $password)
		{
			$this->db->select('id, username, password');
			$this->db->from('users');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
				return $query->result_array();
			}else{
				return false;
			}
		}
	}
 ?>