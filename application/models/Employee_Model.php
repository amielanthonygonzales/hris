<?php 
	
	class Employee_Model extends CI_Model{
		function add($data, $name){
			$this->db->insert('employee',$data);
			$this->db->insert('pag_ibig',$name);
			$this->db->insert('sss',$name);
		}

		function getName(){
			$sql=$this->db->query("SELECT firstName, lastName, middleName, extName, birthday from employee");
			return $sql->result();
		}
	}
?>