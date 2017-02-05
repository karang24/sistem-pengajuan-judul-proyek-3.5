<?php

class C_cari_data extends CI_Controller {

function cariDosen(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cariDosen($cari);
$this->load->view('kordinator/v_cari',$beda);
}
function cariDosen1(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cariDosen($cari);
$this->load->view('Dosen/v_cari_dosen',$beda);
}
function cariMahasiswa(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cariMahasiswa($cari);
$this->load->view('mahasiswa/v_cari',$beda);
}
function cariUser(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cariUser($cari);
$this->load->view('mahasiswa/v_pass',$beda);
}
function cariUser1(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cariUser($cari);
$this->load->view('kordinator/v_pass',$beda);
}
function cariUser2(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cariUser($cari);
$this->load->view('kordinator/v_pass',$beda);
}
function cariProposal(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cariProposal($cari);
$this->load->view('dosen/v_cari',$beda);
}
function cariPembimbing(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cariPembimbing($cari);
$this->load->view('mahasiswa/v_cari_pembimbing',$beda);
}
function cariFormBimbingan(){
$cari=$this->input->get('cari');
$this->load->model('m_cari_data');
$beda['cari']=$this->m_cari_data->cari_formBimbingan($cari);
$this->load->view('mahasiswa/fbimbingan',$beda);
}
function bimbingan(){
		  $this->load->view('dosen/v_bimbingan');
    }	function bimbingan1($npm){
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
	
	function updatedata($npm){
        if($_POST==NULL){
            $this->load->model('m_cari_data');
            $cari1['cari'] = $this->m_cari_data->filterdata($npm);
            $this->load->view('mahasiswa/v_edit_biodata',$cari1);
        }
		else{
            $this->load->model('m_cari_data');
            $this->m_cari_data->updatedata();
            redirect('mahasiswa/c_user_mhs/tampil7');
        }
	}
	
	function updatedata1($username){
        if($_POST==NULL){
            $this->load->model('m_cari_data');
            $cari1['cari'] = $this->m_cari_data->filterdata1($username);
            $this->load->view('dosen/v_edit_pass',$cari1);
        }
		else{
            $this->load->model('m_cari_data');
            $this->m_cari_data->updatedata1();
            redirect('mahasiswa/c_user_mhs/tampil7');
        }
	}
	
	function updatedata2($username){
        if($_POST==NULL){
            $this->load->model('m_cari_data');
            $cari1['cari'] = $this->m_cari_data->filterdata2($username);
            $this->load->view('kordinator/v_edit_biodata',$cari1);
        }
		else{
            $this->load->model('m_cari_data');
            $this->m_cari_data->updatedata2();
            redirect('kordinator/c_kordinator_proposal/tampil7');
        }
	}
}
?>