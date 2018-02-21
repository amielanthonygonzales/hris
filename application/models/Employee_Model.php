<?php 
	
	class Employee_Model extends CI_Model{
		function add($data){
			$this->db->insert('employee',$data);
		}

		function getName(){
			$sql=$this->db->query("SELECT firstName, lastName, middleName, extName, birthday from employee");
			return $sql->result();
		}
	}
?>