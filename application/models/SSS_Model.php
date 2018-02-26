<?php

	class SSS_Model extends CI_Model{
		
		function getEmployee(){
			$sql=$this->db->query("SELECT * FROM sss WHERE active = 1");
			return $sql->result();
		}

		function sssView($id){
			$sql=$this->db->query("SELECT * FROM sss WHERE id =".$id);
			return $sql->result();
		}
	}
?>