<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Grup extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Grup_model');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Grup_model->getAll()->result();
		$this->template->views('crud/master_grup/home_grup',$data);
			//untuk mengakses file views 'crud/home_Grup' pada halaman template
	}

	public function tambah() { //function untuk tambah data
		$this->template->views('crud/master_grup/tambah_grup');
		//untuk mengakses file views 'crud/tambah_Grup' pada halaman template
	}

	public function input() { //function input untuk memasukkan proses inputan data ke database
		$id_grup = $this->input->post('id_grup');
		$grup = $this->input->post('grup');

		$data = array( //array data untuk menampung inputan data
			'id_grup' => $id_grup,
			'grup' => $grup
		);
		$this->Grup_model->input_data($data, 'tm_grup'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Grup');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}

	public function edit($id_grup) {
		$where = array('id_grup' => $id_grup);
		$data['user'] = $this->Grup_model->edit_data($where, 'tm_grup')->result();
		$this->template->views('crud/master_grup/edit_grup', $data);
	}

	public function update() {
		$id_grup = $this->input->post('id_grup');
		$grup = $this->input->post('grup');

		$data = array(
			'id_grup' => $id_grup,
			'grup' => $grup
		);

		$where = array(
			'id_grup' => $id_grup
		);
		$this->Grup_model->update_data($where,$data, 'tm_grup');
		redirect('Grup');
	}

	public function hapus($id_grup) {
		$where = array('id_grup' => $id_grup);
		$this->Grup_model->hapus_data($where, 'tm_grup');
		redirect('Grup');
	}
}
?>