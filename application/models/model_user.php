<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			
			return $query;
				
		}
		public function cek_proposal($data) {
			$query = $this->db->get_where('proposal', $data);
			
			return $query;
				
		}

	}
//$this->db->get_where('user', $data);
			//return $query;
				
?>
