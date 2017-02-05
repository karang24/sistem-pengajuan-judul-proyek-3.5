<?php

class C_koor extends CI_Controller {
	function deletedata($id_proposal){
 
        $this->m_kordinator_proposal->deletedata($id_proposal);
		redirect('kordinator/c_kordinator_proposal/tampil');
	}
	
	function updatedata($id_proposal){
        if($_POST==NULL){
            $this->load->model('m_kordinator_proposal');
            $data['hasil'] = $this->m_kordinator_proposal->filterdata($id_proposal);
            $this->load->view('kordinator/v_kordinator_proposal',$data);
        }
        else{
            $this->load->model('m_kordinator_proposal');
            $this->m_kordinator_proposal->updatedata();
            redirect('kordinator/c_kordinator_proposal/tampil');
        }
    }
	
	function tampil2(){
        $this->load->model('m_kordinator_proposal');
        $data1['hasil1'] = $this->m_kordinator_proposal->bacadata1();
        $this->load->view('kordinator/v_koor',$data1);
    }
   
   function tampil2(){
	   $this->load->view('admin/v_menu');
   }
   
    function tambahdata(){
 
        if($this->input->post('submit')){
            $this->load->model('m_kordinator_proposal');
            $this->m_kordinator_proposal->tambah();
            redirect('kordinator/c_kordinator_proposal/tampil');
        }
        $this->load->view('kordinator/v_kordinator_proposal');
    }
	
	
}
?>