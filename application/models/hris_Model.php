<?php 
	
	class hris_Model extends CI_Model{
		function add($data){
			$this->db->insert('accounts',$data);
		}
	}
?>