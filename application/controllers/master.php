<?php
class Master extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->model('model_app');
        $this->load->helper('currency_format_helper');
    }

    function index(){
        $data=array(
            'title'=>'Master Data',
            'active_master'=>'active',
            'id_items'=>$this->model_app->getKodeBarang(),
            'id_anggota'=>$this->model_app->getKodeAnggota(),
            'data_items'=>$this->model_app->getAllData('items'),
		    'data_pegawai'=>$this->model_app->getAllData('t_anggota'),
			'data_akun'=> $this->model_app->getAllData('user'),
            'data_contact'=>$this->model_app->getAllData('tbl_contact'),
			
            
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_master');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function tambah_barang(){
        $data=array(
            'id_items'=>$this->input->post('id_items'),
            'name'=>$this->input->post('name'),
            'quantity_on_hand'=>$this->input->post('quantity_on_hand'),
            'remaks'=>$this->input->post('remaks'),
        );
        $this->model_app->insertData('items',$data);
        redirect("master");
    }
   
    function tambah_anggota(){
        $data=array(
            'id_anggota'=> $this->input->post('id_anggota'),
            'NPM'=>$this->input->post('NPM'),
            'nama'=>$this->input->post('nama'),
            'alamat'=> $this->input->post('alamat'),
			'jabatan'=> $this->input->post('jabatan'),
            'email'=>$this->input->post('email'),
        );
        $this->model_app->insertData('t_anggota',$data);
        redirect("master");
    }


//    ======================== EDIT =======================
    function edit_barang(){
        $id['id_items'] = $this->input->post('id_items');
        $data=array(
            'name'=>$this->input->post('name'),
            'quantity_on_hand'=>$this->input->post('quantity_on_hand'),
            'remaks'=>$this->input->post('remaks'),
        );
        $this->model_app->updateData('items',$data,$id);
        redirect("master");
    }
   
    function edit_contact(){
        $id['id'] = 1;
        $data=array(
            'nama'=> $this->input->post('nama'),
            'owner'=>$this->input->post('owner'),
            'alamat'=>$this->input->post('alamat'),
            'telp'=>$this->input->post('telp'),
            'email'=>$this->input->post('email'),
            'website'=>$this->input->post('website'),
            'desc'=>$this->input->post('desc'),
        );
        $this->model_app->updateData('tbl_contact',$data,$id);
        redirect("master");
    }
	
    function edit_anggota(){
        $id['id_anggota'] = $this->input->post('id_anggota');
        $data=array(
            'id_anggota'=>$this->input->post('id_anggota'),
            'NPM'=>$this->input->post('NPM'),
            'nama'=> $this->input->post('nama'),
            'alamat'=>$this->input->post('alamat'),
			'jabatan'=>$this->input->post('jabatan'),
			'email'=>$this->input->post('email'),
        );
        $this->model_app->updateData('t_anggota',$data,$id);
        redirect("master");
    }
	function edit_akun(){
		$id['id_user'] = $this->input->post('id_user');
        $data=array(
            'id_user'=>$this->input->post('id_user'),
            'id_anggota'=>$this->input->post('id_anggota'),
            'username'=> $this->input->post('username'),
            'password'=>MD5($this->input->post('password')),
			'level'=>$this->input->post('level'),
			//'email'=>$this->input->post('email'),
        );
        $this->model_app->updateData('user',$data,$id);
        redirect("master");
	}
	
//    ========================== DELETE =======================
    function hapus_barang(){
        $id['id_items'] = $this->uri->segment(3);
        $this->model_app->deleteData('items',$id);
        redirect("master");
    }
    
    function hapus_anggota(){
        $id['id_anggota'] = $this->uri->segment(3);
        $this->model_app->deleteData('t_anggota',$id);
        redirect("master");
    }
}


