<?php
session_start();
class C_kordinator extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text','form');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('kordinator/index', $data);
	}
	public function status(){
        $this->load->model('m_user');
        $data['status_proposal'] = $this->m_user->getStatus();
        $this->load->view('kordinator/v_edit_data_proposal',$data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth','index');
	}
}
?>