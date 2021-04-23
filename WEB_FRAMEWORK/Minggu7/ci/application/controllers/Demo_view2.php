<?php 
/**
 * 
 */
class Demo_view2 extends CI_Controller
{
	public function _construct() {
		parent:: _construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('demoview');
	}
}
?>