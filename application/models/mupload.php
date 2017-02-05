<?php
class Mupload extends CI_Model {

    var $tabel = 'proposal';
	var $tabel1 = 'history';
    var $tabel3 = 'draf_laporan1';
	

    function __construct() {
        parent::__construct();
    }
    
    //fungsi untuk menampilkan semua data dari tabel database
	function get_file() {
        $this->db->from($this->tabel);
		$query = $this->db->get();

        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
	function get_file1() {
        $this->db->from($this->tabel2);
		$query = $this->db->get();

        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}

    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
	function get_insert2($data){
	   $this->db->insert($this->tabel2, $data);
       return TRUE;
    }
	function insert2($data){
	   $this->db->insert($this->tabel3, $data);
       return TRUE;
    }	
	function update($data){
	$this->db->insert($this->tabel1, $data);
	 return TRUE;
	}
	function bacadata(){
        $baca = $this->db->get('proposal');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}

?>
