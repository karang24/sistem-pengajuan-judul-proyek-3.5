<?php

class m_view_proposal extends CI_Model {
	
	public function view_proposal(){ 
	$query = $this->db->query("Select * from proposal "); 
	return $query->result();
	}
}
?>