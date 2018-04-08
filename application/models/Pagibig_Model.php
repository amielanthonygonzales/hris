<?php

	class Pagibig_Model extends CI_Model{
		public function getCompanyData(){
			$sql = $this->db->query("
				SELECT 
				* 
				FROM 
					`company` 
				WHERE 
					`company_id` = 1
				");
			return $sql->result();
		}

		public function getEmployeeData(){
			$sql = $this->db->query("
				SELECT 
				* FROM 
					`employee`, 
					`pag_ibig` 
				WHERE 
					`pagibig_emp_id` = `emp_id` 
				AND 
					`emp_deleted` = 0
				ORDER BY 
					`emp_last_name` ASC
				");
			return $sql->result();
		}
	}
?>