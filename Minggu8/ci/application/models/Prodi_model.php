<?php
class Prodi_model extends CI_Model {
	public function get_data(){
		$data_prodi = [
			['prodi'=>'MIF', 'ket'=>'Manajemen Informatika'],
			['prodi'=>'TKK', 'ket'=>'Teknik Komputer'],
			['prodi'=>'TIF', 'ket'=>'Teknik Informatika']];
			return $data_prodi;
		}
	}