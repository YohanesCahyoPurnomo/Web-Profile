<?php 
	/**
	* 
	*/
	class M_profile extends CI_Model
	{
		
		public function getData($fields, $table, $conditions)
		{
			$this->Webservices->save($fields, $table, $conditions);
		}
	}
 ?>