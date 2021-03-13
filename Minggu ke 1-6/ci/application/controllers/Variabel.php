<?php
class Variabel extends CI_Controller{
	public function index() {
		$data = ['variabel1'=>'Data variabel1 ke 1', 'variabel2'=>'Data variabel2 ke 2'];

		//memanggil file view
		$this->load->view('variabelview', $data);//file view
	}
}
?>