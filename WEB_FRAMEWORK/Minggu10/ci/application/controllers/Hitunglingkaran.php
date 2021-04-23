<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller {
	 function __construct(){
    parent::__construct();
		$this->benchmark->mark('code_start');
		$this->load->library('Lingkaran');
	}
	function index(){
		$this->lingkaran->keliling('21');
		echo "<hr/>";
		$this->lingkaran->luas('14');
		echo '<hr>';
		$this->benchmark->mark('code_end');
		$waktuLoading = $this->benchmark->elapsed_time('code_start', 'code_end');
		echo "Halaman selesai dimuat dalam waktu $waktuLoading detik.";
	}
}
?>