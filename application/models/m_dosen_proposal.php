<?php

class M_dosen_proposal extends CI_Model {
	
	function deletedata($id_proposal){
		
		$this->db->where('id_proposal', $id_proposal);
		$this->db->delete('proposal'); 
	}
	
	function updatedata(){
        $id_proposal = $this->input->post('id_proposal');
        $judul = $this->input->post('judul');
        $D_update = $this->input->post('D_update');
		$D_acc = $this->input->post('D_acc');
		$D_proposal = $this->input->post('D_proposal');
		$file = $this->input->post('file');
		$type_file = $this->input->post('type_file');
		$ket = $this->input->post('ket');
		$npm = $this->input->post('npm');
		$nik = $this->input->post('nik');
		$data = array(
                'id_proposal'=>$id_proposal,
                'judul'=>$judul,
                'D_update'=>$D_update,
                'D_acc'=>$D_acc,
 				'D_proposal'=>$D_proposal,
				'file'=>$file,
				'type_file'=>$type_file,
				'ket'=>$ket,
				'npm'=>$npm,
				'nik'=>$nik				
				);
        $this->db->where(array('id_proposal'=>$id_proposal));
		 $this->db->where(array('nik'=>$nik));
        $this->db->update('proposal',$data);
    }
	    function filterdata($id_proposal, $nik){
        return $this->db->get_where('proposal',
                          array('id_proposal'=>$id_proposal,
						  'nik'=>$nik	
						  
						  
						  ))->row();
    }
 	function read1(){
        $npm = $this->input->post('npm');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		
		$data1 = array(
                'npm'=>$npm,
                'nama_lengkap'=>$nama_lengkap,
                'kelas'=>$kelas,
                'jurusan'=>$jurusan,
 				'alamat'=>$alamat,
				'no_hp'=>$no_hp,			
				);
        $this->db->where(array('npm'=>$npm));
        $this->db->update('mahasiswa',$data1);
    }
 

	 function filterdata1($npm){
        return $this->db->get_where('mahasiswa',
                          array('npm'=>$npm))->row();
    }
	function bacadata(){
        $baca = $this->db->get('proposal');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
		function bacadata1(){
        $baca1 = $this->db->get('mahasiswa');
        if($baca1->num_rows() > 0){
            foreach ($baca1->result() as $data1){
                $hasil1[] = $data1;
            }
            return $hasil1;
        }
    }
	
	function view(){
      $id_proposal = $this->input->get_post('id_proposal');

		$this->db->where('id_proposal', $id_proposal);
		$query1 = $this->db->get('proposal')->result();

		foreach ($query1 as $data) { echo img(array('width' => 300, 'height' => 300, 'src' => '../assets/images/'.$data->file));
		}
	}
    
	function tambah(){
      $id_proposal = $this->input->post('id_proposal');
        $judul = $this->input->post('judul');
        $D_update = $this->input->post('D_update');
		$D_acc = $this->input->post('D_acc');
		$D_proposal = $this->input->post('D_proposal');
		$file = $this->input->post('file');
		$type_file = $this->input->post('type_file');
		$ket = $this->input->post('ket');
		$npm = $this->input->post('npm');
		$data = array(
                'id_proposal'=>$id_proposal,
                'judul'=>$judul,
                'D_update'=>$D_update,
                'D_acc'=>$D_acc,
 				'D_proposal'=>$D_proposal,
				'file'=>$file,
				'type_file'=>$type_file,
				'ket'=>$ket,
				'npm'=>$npm		
                );
        $this->db->insert('proposal',$data);
    }
	function tambah1(){
      $d_bimbingan = $this->input->post('d_bimbingan');
        $uraian = $this->input->post('uraian');
        $tdd = $this->input->post('tdd');
		
		$data = array(
                'd_bimbingan'=>$d_bimbingan,
                'uraian'=>$uraian,
                'tdd'=>$tdd,
 		
                );
        $this->db->insert('proposal',$data);
    }
}


?>