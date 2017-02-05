<?php

class C_kordinator_proposal extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text','form');
	}
	function deletedata($id_proposal){
        $this->m_kordinator_proposal->deletedata($id_proposal);
		redirect('kordinator/c_kordinator_proposal/tampil');
	}
	
	function tampil7(){
        $this->load->model('m_user_dosen');
        $data['hasil'] = $this->m_user_dosen->bacadata();
        $this->load->view('kordinator/tampil_biodata1',$data);
    }
	
	function updatedata($id_proposal){
        if($_POST==NULL){
            $this->load->model('m_kordinator_proposal');
            $data['hasil'] = $this->m_kordinator_proposal->filterdata($id_proposal);
            $this->load->view('kordinator/v_edit_data_proposal',$data);
        }
        else{
            $this->load->model('m_kordinator_proposal');
            $this->m_kordinator_proposal->updatedata();
            redirect('kordinator/c_kordinator_proposal/tampil');
        }
    }
	
	function tampil(){
        $this->load->model('m_kordinator_proposal');
        $data['hasil'] = $this->m_kordinator_proposal->bacadata();
        $this->load->view('kordinator/v_koor',$data);
    }
	function tampil10(){
        $this->load->model('m_user');
        $data['hasil'] = $this->m_user->bacadata();
        $this->load->view('kordinator/v_ganti_pass',$data);
    }
	function tampil11(){
        $this->load->model('m_kordinator_proposal');
        $data['hasil'] = $this->m_kordinator_proposal->bacadata();
        $this->load->view('kordinator/Untitled-1',$data);
    }
	function tampil2(){
        $this->load->model('m_kordinator_proposal');
        $data1 = $this->m_kordinator_proposal->bacadata1();
        $this->load->view('kordinator/v_koor_file',$data1);
    }
	function tampil5(){
        $this->load->model('m_kordinator_proposal');
        $data['hasil'] = $this->m_kordinator_proposal->bacadata();
        $this->load->view('kordinator/v_koor',$data);
    }
   
   function tampil1(){
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
	public function status(){
        $this->load->model('m_kordinator_proposal');
        $data['dosen_pembimbing'] = $this->m_kordinator_proposal->getStatus();
        $this->load->view('kordinator/v_edit_data_proposal',$data);
	}
	
}
?>