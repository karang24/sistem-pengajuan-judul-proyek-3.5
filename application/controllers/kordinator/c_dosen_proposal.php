<?php

class C_dosen_proposal extends CI_Controller {
	function deletedata($id_proposal){
 		$this->load->model('m_dosen_proposal');
        $this->m_dosen_proposal->deletedata($id_proposal);
		redirect('dosen/c_dosen_proposal/tampil');
	}
	
	function updatedata($id_proposal){
        if($_POST==NULL){
            $this->load->model('m_dosen_proposal');
            $data['hasil'] = $this->m_dosen_proposal->filterdata($id_proposal);
            $this->load->view('dosen/v_edit_data_proposal',$data);
        }
        else{
            $this->load->model('m_dosen_proposal');
            $this->m_dosen_proposal->updatedata();
            redirect('dosen/c_dosen_proposal/tampil');
        }
    }
		function read1($npm){
        if($_POST==NULL){
            $this->load->model('m_dosen_proposal');
            $data['hasil'] = $this->m_dosen_proposal->filterdata1($npm);
            $this->load->view('dosen/v_bimbingan',$data);
        }
        else{
            $this->load->model('m_dosen_proposal');
            $this->m_dosen_proposal->updatedata();
            redirect('dosen/c_dosen_proposal/tampil3');
        }
    }
	
	function tampil(){
        $this->load->model('m_dosen_proposal');
        $data['hasil'] = $this->m_dosen_proposal->bacadata();
        $this->load->view('dosen/v_dosen_proposal',$data);
    }
	
	function tampil2(){
        $this->load->model('m_dosen_proposal');
        $data = $this->m_dosen_proposal->view();
        $this->load->view('dosen/v_koor_file',$data);
    }
   
   function tampil1(){
	   $this->load->view('admin/v_menu');
   }
   
   function edit(){
	   $this->load->view('admin/v_edit_data');
   }
   
    function tambahdata(){
 
        if($this->input->post('submit')){
            $this->load->model('m_dosen_proposal');
            $this->m_dosen_proposal->tambah();
            redirect('dosen/c_dosen_proposal/tampil');
        }
        $this->load->view('dosen/v_add_proposal');
    }
	
	
}
?>