<?php 
	/**
	* 
	*/
	class M_about extends CI_Model
	{
		public function getAbout()
		{
			$data = $this->db->query('SELECT * FROM about');
			return $data->result_array();
		}

		public function getAboutUpdate($id)
		{
			$this->db->select('*');
			$this->db->from('about');
			$this->db->where('id', $id);
			$this->db->limit(1);
			$query = $this->db->get();

			return $query->result_array();

			// if ($query->nums_rows() > 0) {
			// 	return $query->result_array();
			// }else{
			// 	return false;
			// }
		}

		public function addAbout($tableName, $data)
		{
			$res = $this->db->insert($tableName, $data);
			return $res;
		}

		public function deleteAbout($tableName, $where)
		{
			$res = $this->db->delete($tableName, $where);
			return $res;
		}

		public function updateAbout($tableName, $data, $where)
		{
			$res = $this->db->update($tableName, $data, $where);
			return $res;
		}
		
	}
 ?>