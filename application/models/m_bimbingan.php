<?php

class M_bimbingan extends CI_Model {

function insert() {
        $insert_bimbingan = array(
            'd_bimbingan' => $this->input->post('d_bimbingan'),
            'uraian' => $this->input->post('uraian'),
            'ttd' => $this->input->post('ttd'),
			'npm' => $this->input->post('npm'),
			'nik' => $this->input->post('nik'),
        );

        $insert = $this->db->insert('bimbingan', $insert_bimbingan);
        return $insert;
    }
		function bacadata(){
        $baca = $this->db->query('select* from proposal');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	   function filterdata($npm){
        return $this->db->get_where('proposal',
                          array('npm'=>$npm))->row();
    }
	
	function bacadata1(){
        $baca = $this->db->get('dosen_pembimbing');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
}
?>