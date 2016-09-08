<?php 
	/**
	* 
	*/
	class Crud
	{
		protected $CI;
		function __construct()
		{
			$this->CI =&get_instance();
			$this->CI->load->helper('url');
			$this->CI->load->view_data['base_url'] = base_url();
		}

		function getData($fields = "", $tables = "", $conditions = array())
		{
			$this->CI->db->select($fields);
			$this->CI->db->from($tables);
			$this->CI->db->where($conditions);
			$query = $this->CI->db->get();

			return $query->result_array();
		}

		public function save($table = "", $data = array())
		{
			$result = $this->db->insert($table, $data);
			return $result;
		}

		public function delete($table = "", $conditions = array())
		{
			$result = $this->db->delete($tabe, $conditions);
			return $result;
		}

		public function update($table = "", $data = array(), $conditions = array())
		{
			$result = $this->db->update($table, $data, $conditions);
			return $result;
		}
	}
