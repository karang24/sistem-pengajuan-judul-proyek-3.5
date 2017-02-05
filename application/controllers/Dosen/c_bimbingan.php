<?php

class C_bimbingan extends CI_Controller {
	 function tambahdata(){
 
        $this->load->model('m_bimbingan');
        $this->m_bimbingan->insert();
        redirect('dosen/c_bimbingan/tampil2');
    }
	function tampil(){
        $this->load->view('dosen/untitled-1');
    }
	function tampil2(){
		 $this->load->model('m_bimbingan');
        $data['hasil'] = $this->m_bimbingan->bacadata();
        $this->load->view('dosen/tampil_mahasiswa');
    }
	function tampil7(){
        $this->load->model('m_user_dosen');
        $data['hasil'] = $this->m_user_dosen->bacadata();
        $this->load->view('dosen/tampil_biodata1',$data);
    }
	function tampil10(){
        $this->load->model('m_user_dosen');
        $data['hasil'] = $this->m_user_dosen->bacadata();
        $this->load->view('dosen/v_ganti_pass',$data);
    }
	function bimbingan(){
		  $this->load->view('dosen/v_bimbingan');
    }
	function bimbingan1($npm){
        if($_POST==NULL){
            $this->load->model('m_bimbingan');
            $data['hasil'] = $this->m_bimbingan->filterdata($npm);
            $this->load->view('dosen/v_bimbingan',$data);
        }
        else{
            $this->load->model('m_bimbingan');
            $this->m_bimbingan->updatedata();
            redirect('dosen/c_bimbingan/tampil');
        }
    }
	
}
?>