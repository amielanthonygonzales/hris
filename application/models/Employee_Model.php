<?php 
	
	class Employee_Model extends CI_Model{
		function add($data){
			$this->db->insert('employee',$data);
		}
	}
?>