<?php
function nilai_get($npm=null){
    if($npm!=null){
        $nilai = $this->db->get('mahasiswa', array('npm'=>$npm));
        if($nilai->num_rows() == 1){
            $respon = array(
                    'status'=>true,
                    'npm'=>$nilai->row()->npm,
                    'nama_lengkap'=>$nilai->row()->nama_lengkap,
                    'kelas'=>$nilai->row()->kelas,
                    'jurusan'=>$nilai->row()->jurusan,
                    'alamat'=>$nilai->row()->alamat,
					'no_hp'=>$nilai->row()->no_hp
                );
            $this->response($respon, 200);
        }else{
            $this->response(array('status'=>false,'msg'=>'Data tidak ditemukan'), 500);
        }
    }else{
        $nilai = $this->db->get('mahasiswa');
        if($nilai->num_rows() > 0){
            $respon = array(
                    'status'=>true,
                    'data_nilai_siswa'=>$nilai->result_array(),
                );
            $this->response($respon, 200);
        }else{
            $this->response(array('status'=>false,'msg'=>'Data tidak ditemukan'), 500);
        }
    }
}
function nilai_post(){
    $data = array(
            'nama_siswa'=>$this->post('nama_siswa'),
            'n_bahasa'=>$this->post('n_bahasa'),
            'n_matematika'=>$this->post('n_matematika'),
            'n_binggris'=>$this->post('n_binggris')
        );
    if($this->db->insert('siswa', $data)){
        $this->response(array('status'=>true,'data'=>$data,'msg'=>'Data Berhasil disimpan'), 200);
    }else{
        $this->response(array('status'=>false,'msg'=>'Data tidak berhasil disimpan!!'), 500);
    }
} 

?>