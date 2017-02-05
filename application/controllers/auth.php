<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$sess_data['nama_lengkap'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/c_admin');
			}
			elseif ($this->session->userdata('level')=='dosen') {
				redirect('dosen/c_dosen');
			}
			elseif ($this->session->userdata('level')=='kordinator') {
				redirect('kordinator/c_kordinator');
			}
			elseif ($this->session->userdata('level')=='mahasiswa') {
				$this->db->where('npm', $this->session->userdata('username'));
				$this->db->order_by('id_proposal', 'desc');
				$cek_status = $this->db->get('proposal');
				if ($cek_status->num_rows() > 0) {
					$this->session->set_userdata('status_proposal', $cek_status->row()->ket);
					redirect('mahasiswa/c_mahasiswa/status/'.$cek_status->row()->ket);
				} else {
					redirect('mahasiswa/c_mahasiswa/status');
				}
			}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}


}
}
?>
