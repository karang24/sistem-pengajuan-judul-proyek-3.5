<?php

class view_koor extends CI_Model {
	public function view_koor(){
	$query = $this->db->query("select*from proposal");
	return $query->result();
        }
    }

?>