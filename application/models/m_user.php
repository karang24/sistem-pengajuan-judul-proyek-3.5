<?php

class M_user extends CI_Model {
	
	function deletedata($id_user){
		
		$this->db->where('id_user', $id_user);
		$this->db->delete('user'); 
	}
	
	function updatedata(){
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
                'id_user'=>$id_user,
                'username'=>$username,
                'password'=>MD5($this->input->post('password')),
                'level'=>$level
				);
        $this->db->where(array('id_user'=>$id_user,
                                'username'=>$username));
        $this->db->update('user',$data);
    }
 
    function filterdata($id_user,$username){
        return $this->db->get_where('user',
                          array('id_user'=>$id_user,
                                'username'=>$username))->row();
    }
	
	function bacadata(){
        $baca = $this->db->get('user');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
    function tambah(){
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');				
		$data = array(
                'id_user'=>$id_user,
                'username'=>$username,
                'password'=>MD5($this->input->post('password')),
				'level'=>$level
                );
        $this->db->insert('user',$data);
    }
	
	function getStatus()
	{
	$query = $this->db->query("SELECT * FROM status_proposal");
	if ($query->num_rows()> 0){
	foreach ($query->result_array() as $row)
	{
	$data[$row['status']] = $row['status'];
	}
	}
	return $data;
 }
}

?>