<?php

class m_cari_data extends CI_Model {

public function cariProposal($cari)
{
$cari=$this->db->query("select * from proposal where nik LIKE '%$cari%'  ");
return $cari->result();
}
public function cariPembimbing($cari)
{
$cari=$this->db->query("select * from proposal where npm LIKE '%$cari%'  ");
return $cari->result();
}
public function cariDosen($cari)
{
$cari=$this->db->query("select * from dosen_pembimbing where nik like '%$cari%'  ");
return $cari->result();
}
public function cariDosen1($cari)
{
$cari=$this->db->query("select * from dosen_pembimbing where nik like '%$cari%'  ");
return $cari->result();
}
public function cariMahasiswa($cari)
{
$cari=$this->db->query("select * from mahasiswa where npm like '%$cari%'  ");
return $cari->result();
}
public function cariUser($cari)
{
$cari=$this->db->query("select * from user where username like '%$cari%'  ");
return $cari->result();
}
public function cari_formBimbingan($cari)
{
$cari=$this->db->query("select * from bimbingan where npm like '%$cari%'  ");
return $cari->result();
}
function updatedata(){
        $npm = $this->input->post('npm');
        $nama_lengkap = $this->input->post('nama_lengkap');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');		
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		
		;
		$hasil = array(
                'npm'=>$npm,
				'nama_lengkap'=>$nama_lengkap,
                'kelas'=>$kelas,
				'jurusan'=>$jurusan,
				'alamat'=>$alamat,
				'no_hp'=>$no_hp,
				
				);
        $this->db->where(array('npm'=>$npm));
        $this->db->update('mahasiswa',$hasil);
    }
 
    function filterdata($npm){
        return $this->db->get_where('mahasiswa',
                          array('npm'=>$npm))->row();
    }
	
	function updatedata1(){
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');		
		;
		$hasil = array(
                'username'=>$username,
				'password'=>MD5($this->input->post('password')),
                'level'=>$level
				);
        $this->db->where(array('username'=>$username));
        $this->db->update('user',$hasil);
    }
 
    function filterdata1($username){
        return $this->db->get_where('user',
                          array('username'=>$username))->row();
    }
	
	function updatedata2(){
        $nik= $this->input->post('nik');
        $nama= $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$data = array(
                'nik'=>$nik,
				'nama'=>$nama,
                'no_hp'=>$no_hp
				);
        $this->db->where(array('nik'=>$nik));
        $this->db->update('dosen_pembimbing',$data);
    }
 
    function filterdata2($nik){
        return $this->db->get_where('dosen_pembimbing',
                          array('nik'=>$nik))->row();
    }
}
?>