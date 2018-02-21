<?php 
	
	class Company_Model extends CI_Model{
		function add($data){
			$this->db->insert('company',$data);
		}
		function checkID(){
			$query = $this->db->query("SELECT sssid, pagibigid FROM company");
			return $query->result();
		}
	}
?>