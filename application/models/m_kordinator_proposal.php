<?php

class M_kordinator_proposal extends CI_Model {
	
	function deletedata($id_proposal){
		
		$this->db->where('id_proposal', $id_proposal);
		$this->db->delete('proposal'); 
	}
	
	//function updatedata(){
        	//{
			//$proposal = array('proposal'=>$proposal);
			//$query = $this->db->query("SELECT a.*, b.* FROM proposal a, dosen_pembimbing b where a.ket = b.nik and a.id_proposal =".$where);
			
			//if ($query->num_rows()> 0){
			//foreach ($query->result_array() as $row)
			//{
				//$data[$row['id_proposal']] = $row['id_proposal'];
				//$data[$row['judul']] = $row['judul'];
				//$data[$row['D_update']] = $row['D_update'];
				//$data[$row['D_acc']] = $row['D_acc'];
				//$data[$row['D_proposal']] = $row['D_proposal'];
				//$data[$row['file']] = $row['file'];
				//$data[$row['type_file']] = $row['type_file'];
				//$data[$row['ket']] = $row['ket'];
				//$data[$row['npm']] = $row['npm'];
				//$data[$row['nik']] = $row['nik'];
				
				//}
				
				
			//}
			
			
				 //}

				
        //$this->db->where(array('id_proposal'=>$id_proposal));
		 //$this->db->where(array('nik'=>$nik));
        //$this->db->update('proposal',$data);
		//$data1 = array(
				//'status'=>$status 
				//);
		//$this->db->get('dosen_pembimbing',$data1);
    //}
	function updatedata(){
        $id_proposal = $this->input->post('id_proposal');
        $judul = $this->input->post('judul');
        $D_update = $this->input->post('D_update');
		$D_acc = $this->input->post('D_acc');
		$D_proposal = $this->input->post('D_proposal');
		$file = $this->input->post('file');
		$type_file = $this->input->post('type_file');
		$ket = $this->input->post('ket');
		$npm = $this->input->post('npm');
		$nik = $this->input->post('nik');
		$status = $this->input->post('status');
		$data = array(
                'id_proposal'=>$id_proposal,
                'judul'=>$judul,
                'D_update'=>$D_update,
                'D_acc'=>$D_acc,
 				'D_proposal'=>$D_proposal,
				'file'=>$file,
				'type_file'=>$type_file,
				'ket'=>$ket,
				'npm'=>$npm,
				'nik'=>$nik					
				);
        $this->db->where(array('id_proposal'=>$id_proposal));
        $this->db->update('proposal',$data);
		$data1 = array(
				'status'=>$status 
				);
		$this->db->get('status_proposal',$data1);
    }
	
    function filterdata($id_proposal){
        return $this->db->get_where('proposal',
                          array('id_proposal'=>$id_proposal))->row();
    }
	 function filterdata1($nik){
        return $this->db->get_where('dosen_pembimbing',
                          array('nik'=>$id_proposal))->row();
    }
	
	function bacadata(){
        $baca = $this->db->query('select* from proposal');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	function bacadata1(){
        $baca1 = $this->db->query("SELECT id_proposal, judul, nama_file FROM proposal ");
		foreach ($baca1->result_array() as $row){
		}
        if($baca1->num_rows() > 0){
            foreach ($baca1->result() as $data1){
                $hasil1[] = $data1;
            }
            return $hasil1;
        }
    }
	function view(){
		$id_proposal = $this->input->get_post('id_proposal');
		$this->db->where('id_proposal',$id_proposal);
		$query1 = $this->db->get('proposal')->result();
		
		foreach($query1 as $data){echo pdf(array('src =>/assets/uploads/'.$data->file));
		}
	}
    function tambah(){
      	$id_proposal = $this->input->post('id_proposal');
        $judul = $this->input->post('judul');
        $D_update = $this->input->post('D_update');
		$D_acc = $this->input->post('D_acc');
		$D_proposal = $this->input->post('D_proposal');
		$file = $this->input->post('file');
		$type_file = $this->input->post('type_file');
		$ket = $this->input->post('ket');
		$npm = $this->input->post('npm');
		$data = array(
                'id_proposal'=>$id_proposal,
                'judul'=>$judul,
                'D_update'=>$D_update,
                'D_acc'=>$D_acc,
 				'D_proposal'=>$D_proposal,
				'file'=>$file,
				'type_file'=>$type_file,
				'ket'=>$ket,
				'npm'=>$npm		
                );
        $this->db->insert('proposal',$data);
    }
}
function getStatus()
	{
	$query = $this->db->query("SELECT * FROM dosen_pembimbing");
	if ($query->num_rows()> 0){
	foreach ($query->result_array() as $row)
	{
	$data[$row['nik']] = $row['nik'];
	}
	}
	return $data;
 }
?>