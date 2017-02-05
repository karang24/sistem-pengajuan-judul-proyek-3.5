<?php

class M_user_dosen extends CI_Model {
	
	function deletedata($NIK){
		
		$this->db->where('NIK', $NIK);
		$this->db->delete('dosen_pembimbing'); 
	}
	
	function updatedata(){
        $nik= $this->input->post('nik');
        $nama= $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$data = array(
                'nik'=>$nik,
				'nama'=>$nama,
                'no_hp'=>$no_hp
				);
        $this->db->where(array('nik'=>$nik));
        $this->db->update('dosen_pembimbing',$data);
    }
 
    function filterdata($NIK){
        return $this->db->get_where('dosen_pembimbing',
                          array('NIK'=>$NIK))->row();
    }
	
	function bacadata(){
        $baca = $this->db->get('dosen_pembimbing');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
    function tambah(){
        $nik= $this->input->post('nik');
        $nama= $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$id_user = $this->input->post('id_user');
		$password = $this->input->post('password');
        $level = $this->input->post('level');	
		$data = array(
                'nik'=>$nik,
				'nama'=>$nama,
                'no_hp'=>$no_hp
				);
        $this->db->insert('dosen_pembimbing',$data);
		
		$data2 = array(
                'id_user'=>$id_user,
                'username'=>$nik,
                'password'=>MD5($this->input->post('password')),
				'level'=>$level
                );
		$this->db->insert('user',$data2);
    }
}
	function bacadata(){
        $baca = $this->db->get('dosen_pembimbing');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

?>