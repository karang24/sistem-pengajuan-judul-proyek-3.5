<?php

class C_user_dosen extends CI_Controller {
	
	function deletedata($nik){
 
 		$this->load->model('m_user_dosen');
        $this->m_user_dosen->deletedata($nik);
		redirect('admin/c_user_dosen/tampil');
	}
	
	function updatedata($nik){
        if($_POST==NULL){
            $this->load->model('m_user_dosen');
            $data['hasil'] = $this->m_user_dosen->filterdata($nik);
            $this->load->view('admin/v_edit_user_dosen',$data);
        }
        else{
            $this->load->model('m_user_dosen');
            $this->m_user_dosen->updatedata();
            redirect('admin/c_user_dosen/tampil');
        }
    }
	
	function tampil(){
        $this->load->model('m_user_dosen');
        $data['hasil'] = $this->m_user_dosen->bacadata();
        $this->load->view('admin/v_dosen',$data);
    }
   
    function tambahdata(){
 
        if($this->input->post('submit')){
            $this->load->model('m_user_dosen');
            $this->m_user_dosen->tambah();
            redirect('admin/c_user_dosen/tampil');
        }
        $this->load->view('admin/v_add_user_dosen');
    }
	
}

?>