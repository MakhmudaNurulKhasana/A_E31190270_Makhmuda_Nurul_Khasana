<?php
class Angkatan_model extends CI_Model {
	public function get_data(){
		$data_prodi = [
			['angkatan'=>'2019'],
			['angkatan'=>'2020'],
			['angkatan'=>'2021'],
		];
		return $data_prodi;
	}
}