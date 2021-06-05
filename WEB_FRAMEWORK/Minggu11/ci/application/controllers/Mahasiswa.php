 <?php
 defined ('BASEPATH') OR exit ('No direct script access allowed');
class Mahasiswa extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Mahasiswa_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}
	
	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Mahasiswa_model->getAll()->result();
		$this->template->views('crud/home_mahasiswa',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

	public function tambah() { //function untuk tambah data
		$this->template->views('crud/tambah_mahasiswa');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}

	public function input() { //function input untuk memasukkan proses inputan data ke database
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array( //array data untuk menampung inputan data
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$this->Mahasiswa_model->input_data($data, 'tm_user'); 
		//untuk mengakses file model 'Mahasiswa_model' dan data tersimpan pada tabel tm_user
		redirect('Mahasiswa/index');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}

	public function edit($id) {
		$where = array('id' => $id);
		$data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
		$this->template->views('crud/edit_mahasiswa', $data);
	}

	public function update() {
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup,
		);

		$where = array(
			'id' => $id
		);
		$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
		redirect('Mahasiswa');
	}

	public function hapus($id) {
		$where = array('id' => $id);
		$this->Mahasiswa_model->hapus_data($where, 'tm_user');
		redirect('Mahasiswa/index');
	}
}
?>