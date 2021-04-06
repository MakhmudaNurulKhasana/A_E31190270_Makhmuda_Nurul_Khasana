<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller {
	function _construct(){
		parent::_construct();
		$this->load->library('Lingkaran');
	}
	function index(){
		$this->Lingkaran->keliling('21');
		echo "<hr/>";
		$this->Lingkaran->luas('14');
	}
}
?>