<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Witems extends CI_Controller {
	function __construct(){
		parent::__construct();
//if($this->session->userdata('login_status') != TRUE ){
  //          $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
    //        redirect('');
      //  };		
		$this->load->model('m_items');		
	}

	public function index(){
		$requesklien = json_decode(file_get_contents ("php://input"));
		header('Content-type: application/json');
		$query = $this->m_items->getItems();
		$json =  json_encode ($query);	
		//return $json;
		echo $json;
		//if($json) {
			//$this->response($json, 200); // 200 being the HTTP response code
		//} else {
		//	$this->response(array('error' => 'User could not be found'), 404);
		//}
		//$dc = json_decode($json, true);
		// var_dump($dc);
		// echo $dc[0]['name'].'</br>';
		// echo $dc[0]['quantity_on_hand'];
		// echo $dc[0]['Id_items'];
	}
	
	function a(){
		$a = $this->index(); //ambil data terserah
		//setelah data didapat
		$dc = json_decode($a, true);
		var_dump($dc);
		// echo $dc[0]['name'].'</br>';
		// echo $dc[0]['quantity_on_hand'].'</br>';
		// echo $dc[0]['Id_items'];
	}
}
?>