<?php

class c_data_bimbingan extends CI_Controller {

function tampil(){
        $this->load->model('m_data_bimbingan');
        $data['hasil'] = $this->m_data_bimbingan->bacadata();
        $this->load->view('dosen/v_data_bimbingan',$data);
    }
}
?>