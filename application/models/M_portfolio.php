<?php 
	/**
	* 
	*/
	class M_portfolio extends CI_Model
	{
		
		public function getPortfolio()
		{
			$data = $this->db->query('select * from portfolio');
			return $data->result_array();
		}

		public function getPortfolioUpdate($id)
		{
			$this->db->select('*');
			$this->db->from('portfolio');
			$this->db->where('id', $id);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
				return $query->result_array();
			}else{
				return false;
			}
		}

		public function addPortfolio($tabelName, $data)
		{
			$res = $this->db->insert($tabelName, $data);
			return $res;
		}

		public function deletePortfolio($tabelName, $where)
		{
			$res = $this->db->delete($tabelName, $where);
			return $res;
		}

		public function updatePortfolio($tabelName, $data, $where)
		{
			$res = $this->db->update($tabelName, $data, $where);
			return $res;
		}
	}
 ?>