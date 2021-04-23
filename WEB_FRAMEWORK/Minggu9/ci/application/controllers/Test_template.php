<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Test_template extends CI_Controller {
	function _construct() {
		parent::_construct();
		$this->load->helper('html');
	}
	public function index() {
		$this->load->view('indexx');
	}
}
?>