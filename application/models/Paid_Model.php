<?php

	class Paid_Model extends CI_Model{
		public function addContribution($addPost){
			$sql = $this->db->query("
				INSERT INTO 
					`paid_contribution` 
						(
							`month`, 
							`year`, 
							`amount`, 
							`gov_agency`,
							`paid_employee`
						) 
				VALUES 
					(
						".$this->db->escape($addPost['month']).", 
						".$this->db->escape($addPost['year']).", 
						".$this->db->escape($addPost['amount']).", 
						".$this->db->escape($addPost['gov_agency']).", 
						".$this->db->escape($addPost['paid_employee'])."
					)"
				);
			return 1;
		}
		
		public function getContributions(){
			$sql = $this->db->query("
				SELECT 
				* FROM 
					`employee`, 
					`pag_ibig`,
					`sss` 
				WHERE 
					`pagibig_emp_id` = `emp_id`
				AND
					`sss_emp_id`  = `emp_id`
				AND 
					`emp_deleted` = 0 
				AND 
					`pagibig_deleted` = 0
				ORDER BY 
					`emp_last_name` ASC
				");
			return $sql->result();
		}
	}
?>