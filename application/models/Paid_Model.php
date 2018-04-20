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
							`gov_agency`
						) 
				VALUES 
					(
						".$this->db->escape($addPost['month']).", 
						".$this->db->escape($addPost['year']).", 
						".$this->db->escape($addPost['amount']).", 
						".$this->db->escape($addPost['gov_agency'])."
					)"
				);
			return 1;
		}
	}
?>