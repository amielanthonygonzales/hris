<?php 
	
	class Company_Model extends CI_Model{
		function addCompany($postCompany){
			$this->db->query("
				UPDATE 
					company 
				SET 
					company_sss_id = " .$this->db->escape($postCompany['company_sss_id']). " ,
					company_pagibig_id = " .$this->db->escape($postCompany['company_pagibig_id']). " ,
					company_name = " .$this->db->escape($postCompany['company_name']). " ,
					company_address = " .$this->db->escape($postCompany['company_address']). " ,
					company_tax_id = " .$this->db->escape($postCompany['company_tax_id']). " ,
					company_contact_info = " .$this->db->escape($postCompany['company_contact_info']). " ,
					company_email = " .$this->db->escape($postCompany['company_email']). " ,
					company_representative = " .$this->db->escape($postCompany['company_representative']). " ,
					company_rep_pos = " .$this->db->escape($postCompany['company_rep_pos']). " 
				WHERE 
					company_id = 1");
			return 1;
		}
		function checkID(){
			$query = $this->db->query("SELECT sssid, pagibigid FROM company");
			return $query->result();
		}

		function getAllCompanyInfo(){
			$sql = $this->db->query("SELECT * FROM company WHERE company_id = 1");
			return $sql->result();
		}
	}
?>