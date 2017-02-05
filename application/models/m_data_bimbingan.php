<?php

class M_data_bimbingan extends CI_Model {

	function bacadata(){
        $baca = $this->db->get('bimbingan');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function bacadata1(){
        $baca = $this->db->query('SELECT COUNT(a.id_bimbingan) as total_bimbingan from 
		bimbingan a, mahasiswa b, dosen_pembimbing c 
		where a.npm = b.npm and a.nik = c.nik and b.npm = '$npm'');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function filterdata($npm){
        return $this->db->get_where('bimbingan',
                          array('npm'=>$npm))->row();
    }
}
?>