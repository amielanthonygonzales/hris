<?php 
	
	class Company_Model extends CI_Model{
		function add($data){
			$this->db->insert('company',$data);
		}
	}
?>