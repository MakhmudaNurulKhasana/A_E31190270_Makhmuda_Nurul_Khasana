<?php
class Tugas2 extends CI_Controller{
	public function index() {
		echo "<h2>Hello</h2>";

		//memanggil file view
		$this->load->view('tugas2');//file view
	}
}
?>