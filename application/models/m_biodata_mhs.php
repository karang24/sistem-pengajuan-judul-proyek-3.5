<?php

class M_biodata_mhs extends CI_Model {

function updatedata(){
        $npm = $this->input->post('npm');
        $nama_lengkap = $this->input->post('nama_lengkap');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');		
		
		$no_hp = $this->input->post('no_hp');
		
		;
		$hasil = array(
                'npm'=>$npm,
				'nama_lengkap'=>$nama_lengkap,
                'kelas'=>$kelas,
				'jurusan'=>$jurusan,
				
				'no_hp'=>$no_hp,
				
				);
        $this->db->where(array('npm'=>$npm));
        $this->db->update('mahasiswa',$hasil);
    }
 
    function filterdata($npm){
        return $this->db->get_where('mahasiswa',
                          array('npm'=>$npm))->row();
    }
}
?>