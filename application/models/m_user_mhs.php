<?php

class M_user_mhs extends CI_Model {
	function deletedata($npm, $id_user){
		
		$this->db->where('npm', $npm);
		$this->db->delete('mahasiswa'); 
		
		$this->db->where('id_user', $npm);
		$this->db->delete('user'); 
	
	}
	
	function updatedata(){
        $npm = $this->input->post('npm');
        $nama_lengkap = $this->input->post('nama_lengkap');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');		
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$ket = $this->input->post('ket');
		;
		$data = array(
                'npm'=>$npm,
				'nama_lengkap'=>$nama_lengkap,
                'kelas'=>$kelas,
				'jurusan'=>$jurusan,
				'alamat'=>$alamat,
				'no_hp'=>$no_hp,
				
				);
        $this->db->where(array('npm'=>$npm));
        $this->db->update('mahasiswa',$data);
    }
 
    function filterdata($npm){
        return $this->db->get_where('mahasiswa',
                          array('npm'=>$npm))->row();
    }
	
	function bacadata(){
        $baca = $this->db->get('mahasiswa');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
		function bacadata1(){
        $baca = $this->db->get('proposal');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
    function tambah(){
        $username = $this->input->post('username');
        $nama_lengkap = $this->input->post('nama_lengkap');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');		
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$id_user = $this->input->post('id_user');
		$password = $this->input->post('password');
        $level = $this->input->post('level');	
		$data = array(
        		'npm'=>$username,
				'nama_lengkap'=>$nama_lengkap,
                'kelas'=>$kelas,
				'jurusan'=>$jurusan,
				'alamat'=>$alamat,
				'no_hp'=>$no_hp
				);
        $this->db->insert('mahasiswa',$data);
		
		$data2 = array(
                'id_user'=>$id_user,
                'username'=>$username,
                'password'=>MD5($this->input->post('password')),
				'level'=>$level
                );
		$this->db->insert('user',$data2);
    }
}

?>