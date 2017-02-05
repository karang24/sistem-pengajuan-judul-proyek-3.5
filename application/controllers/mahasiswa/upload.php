<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller
{
    var $limit=10;
	var $offset=10;

    public function __construct() {
        parent::__construct();
        $this->load->model('mupload'); //load model mupload yang berada di folder model
        $this->load->helper(array('url')); //load helper url 
		$this->load->helper(array('date'));
    }

	public function index($page=NULL,$offset='',$key=NULL)
	{
        $data['titel']='Upload CodeIgniter'; //varibel title
        
        $data['query'] = $this->mupload->get_file(); //query dari model
        
        $this->load->view('mahasiswa/upload',$data); //tampilan awal ketika controller upload di akses
	}
    public function add() {
	    
        $data['titel']='Form Upload CodeIgniter'; //varibel title
        
        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('index',$data);
       $datestring ="tahun: %Y Bulan: %m Hari: %d -%h:%i %a";
    }
    public function insert(){
        $this->load->library('upload');
        //$nmfile = "Proposal_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '15420'; //maksimum besar file 2M
        $config['file_name'] = "Proposal_".time(); //nama yang terupload nantinya

        $this->upload->initialize($config);
		$this->load->helper('date');
        
        if($_FILES['file']['name'])
        {
            if ($this->upload->do_upload('file'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'judul' =>$this->input->post('judul'),
				  'D_update' =>$this->input->post('update'),
				  'D_acc' =>$this->input->post('tgl_acc'),
				  'D_proposal' =>$this->input->post('tgl'),
				  'file' =>$gbr['file_name'],
                  'type_file' =>$gbr['file_type'],
                  'ket' =>$this->input->post('textket'),
				  'npm' =>$this->input->post('npm')
                );

                $this->mupload->get_insert($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload file berhasil !!</div></div>");
                redirect('mahasiswa/upload'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">File harus berformat PDF !!</div></div>");
                redirect('mahasiswa/upload'); //jika gagal maka akan ditampilkan form upload
            }
			
        }
    
	}
	 public function update_proposal(){
        $this->load->library('upload');
        //$nmfile = "Proposal_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '15420'; //maksimum besar file 2M
        $config['file_name'] = "Proposal_".time(); //nama yang terupload nantinya

        $this->upload->initialize($config);
		$this->load->helper('date');
        
        if($_FILES['file']['name'])
        {
            if ($this->upload->do_upload('file'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'judul' =>$this->input->post('judul'),
				  'D_update' =>$this->input->post('update'),
				  'D_acc' =>$this->input->post('tgl_acc'),
				  'D_proposal' =>$this->input->post('tgl'),
				  'file' =>$gbr['file_name'],
                  'type_file' =>$gbr['file_type'],
                  'ket' =>$this->input->post('textket'),
				  'npm' =>$this->input->post('npm')
                );
				$data2 = array(
                  'judul' =>$this->input->post('judul'),
				  'D_update' =>$this->input->post('update'),
				  'D_acc' =>$this->input->post('tgl_acc'),
				  'D_proposal' =>$this->input->post('tgl'),
				  'file' =>$gbr['file_name'],
                  'type_file' =>$gbr['file_type'],
                  'ket' =>$this->input->post('textket'),
				  'npm' =>$this->input->post('npm')
                );

                $this->mupload->update($data);
				$this->mupload->get_insert2($data2);
				 //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload file berhasil !!</div></div>");
                redirect('mahasiswa/c_user_mhs/upload_ditolak'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">File harus berformat PDF !!</div></div>");
                redirect('mahasiswa/c_user_mhs/upload_ditolak'); //jika gagal maka akan ditampilkan form upload
            }
			
        }
    
	}
	
	public function upload_draf(){
        $this->load->library('upload');
        //$nmfile = "Proposal_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/laporan/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '20420'; //maksimum besar file 2M
        $config['file_name'] = "Laporan".time(); //nama yang terupload nantinya

        $this->upload->initialize($config);
		$this->load->helper('date');
        
        if($_FILES['file']['name'])
		
        {
            if ($this->upload->do_upload('file'))
            {
                $draf = $this->upload->data();
                $data = array(
                  'judul' =>$this->input->post('judul'),
				  'D_pengumpulan' =>$this->input->post('D_pengumpulan'),
				  'draf' =>$draf['file_name'],
				  'npm' =>$this->input->post('npm')

                );

                $this->mupload->insert2($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload file berhasil !!</div></div>");
                redirect('mahasiswa/c_user_mhs/upload_draf'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">File harus berformat PDF !!</div></div>");
                redirect('mahasiswa/c_user_mhs/upload_draf'); //jika gagal maka akan ditampilkan form upload
            }
			
        }
    
	}
	public function update_proposal1(){
        $this->load->library('upload');
        //$nmfile = "Proposal_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '15420'; //maksimum besar file 2M
        $config['file_name'] = "Proposal_".time(); //nama yang terupload nantinya

        $this->upload->initialize($config);
		$this->load->helper('date');
        
        if($_FILES['file']['name'])
        {
            if ($this->upload->do_upload('file'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'judul' =>$this->input->post('judul'),
				  'D_update' =>$this->input->post('update'),
				  'D_acc' =>$this->input->post('tgl_acc'),
				  'D_proposal' =>$this->input->post('tgl'),
				  'file' =>$gbr['file_name'],
                  'type_file' =>$gbr['file_type'],
                  'ket' =>$this->input->post('textket'),
				  'npm' =>$this->input->post('npm')
                );

                $this->mupload->update($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload file berhasil !!</div></div>");
                redirect('mahasiswa/c_user_mhs/upload_revisi'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">File harus berformat PDF !!</div></div>");
                redirect('mahasiswa/c_user_mhs/upload_revisi'); //jika gagal maka akan ditampilkan form upload
            }
			
        }
    
	}
	
}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */
?>