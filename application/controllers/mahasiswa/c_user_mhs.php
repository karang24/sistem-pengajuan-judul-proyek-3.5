<?php

class C_user_mhs extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	function tampil(){
        $this->load->view('mahasiswa/Untitled-1');
    }
	function indexditolak(){
	
        $this->load->view('mahasiswa/index_ditolak');
    }
	
	function indexditerima(){
	
        $this->load->view('mahasiswa/index_diterima');
    }
	function indexrevisi(){
	
        $this->load->view('mahasiswa/index_revisi');
    }
	
	function proposalditolak(){
	$this->load->model('mupload');
        $data['hasil'] = $this->mupload->bacadata();
        $this->load->view('mahasiswa/v_proposalditolak',$data);
    }
	function proposalrevisi(){
	$this->load->model('mupload');
        $data['hasil'] = $this->mupload->bacadata();
        $this->load->view('mahasiswa/v_proposalrevisi',$data);
    }
   function tampil3(){
        $this->load->view('mahasiswa/V_proposal');
    }
	 function tampi29(){
        $this->load->view('mahasiswa/V_proposal');
    }
	 function tampil4(){
        $this->load->model('m_user_mhs');
        $data['hasil'] = $this->m_user_mhs->bacadata();
        $this->load->view('admin/v_mhs',$data);
    }
	 function tampil6(){
        $this->load->model('m_user');
        $data['hasil'] = $this->m_user->baca();
        $this->load->view('kordinator/v_koor',$data);
    }
	 function tampil10(){
        $this->load->model('m_user');
        $data['hasil'] = $this->m_user->bacadata();
        $this->load->view('mahasiswa/v_ganti_pass',$data);
    }
	function tampil2(){
        $this->load->model('m_user_dosen');
        $data['hasil'] = $this->m_user_dosen->bacadata();
        $this->load->view('admin/v_dosen',$data);
    }
	 function tampil7(){
        $this->load->model('m_user_mhs');
        $data['hasil'] = $this->m_user_mhs->bacadata();
        $this->load->view('mahasiswa/tampil_biodata1',$data);
    }
	function tampil5(){
        $this->load->model('m_bimbingan');
        $data['hasil'] = $this->m_bimbingan->bacadata();
        $this->load->view('mahasiswa/tampil_pembimbing',$data);
		
    }
		function tampil20(){
        $this->load->model('m_user_dosen');
        $data['hasil'] = $this->m_user_dosen->bacadata();
        $this->load->view('mahasiswa/v_pembimbing',$data);
    }
	function tampil21(){
        
        $this->load->view('mahasiswa/v_cari_form_bimbingan');
    }
    function tambahdata(){
 
        if($this->input->post('submit')){
            $this->load->model('m_user');
            $this->m_user->tambah();
            redirect('admin/c_user/tampil3');
        }
              $this->load->view('admin/v_add_user');
    }
	 function tambahdata1(){
 
        if($this->input->post('submit')){
            $this->load->model('m_user_mhs');
            $this->m_user_mhs->tambah();
            redirect('admin/c_user_mhs/tampil');
        }
        $this->load->view('admin/v_add_user_mhs');
    }
	 function tambahdata2(){
 
        if($this->input->post('submit')){
            $this->load->model('m_user_dosen');
            $this->m_user_dosen->tambah();
            redirect('admin/c_user_dosen/tampil');
        }
        $this->load->view('admin/v_add_user_dosen');
    }
	public function cek_proposal() { 
	
	 $this->load->model('m_user_mhs');
        $data['hasil'] = $this->m_user_mhs->bacadata();
        $this->load->view('mahasiswa/upload',$data);
    }
	public function cek_proposal1() { 
	
	 $this->load->model('mupload');
        $data['hasil'] = $this->mupload->bacadata();
        $this->load->view('mahasiswa/upload_ditolak',$data);
    }
	public function cek_proposal2() { 
	
	 $this->load->model('mupload');
        $data['hasil'] = $this->mupload->bacadata();
        $this->load->view('mahasiswa/upload_revisi',$data);
    }
	
	public function upload_ditolak() { 
	
	 $this->load->model('m_user_mhs');
        $data['hasil'] = $this->m_user_mhs->bacadata();
        $this->load->view('mahasiswa/upload_ditolak',$data);
    }

	public function upload_revisi() { 
	
	 $this->load->model('m_user_mhs');
        $data['hasil'] = $this->m_user_mhs->bacadata();
        $this->load->view('mahasiswa/upload_revisi',$data);
		
    }
	
	public function upload_draf() { 
	
	 $this->load->model('m_user_mhs');
        $data['hasil'] = $this->m_user_mhs->bacadata();
        $this->load->view('mahasiswa/upload_draf',$data);
		
    }
	function uploadlaporan(){
		$this->db->where('npm', $this->session->userdata('username'));
		$query = $this->db->get('bimbingan');
		if ($query->num_rows() > 7) {
			$this->load->view('mahasiswa/upload_draf',$query);
		} else {
			echo "<script>alert('Anda belum memenuhi syarat pengumpulan draf');history.go(-1);</script>";
		}
	}
	
}

?>
