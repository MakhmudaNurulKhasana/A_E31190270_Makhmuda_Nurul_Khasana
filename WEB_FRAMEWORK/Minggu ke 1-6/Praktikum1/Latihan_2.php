<?php
	class kendaraan {
		var $jumlahRoda;
		var $warna;
		var $bahanBakar;
		var $harga;
		var $merek;
		var $tahunPembuatan;
		
		function dapatSubsidi() {
			if ($this->bahanBakar = 'Premium' && $this->tahunPembuatan<2005) $subsidi='Dapat';
			else $subsidi = 'Tidak Dapat';
			return $subsidi;
		}
	}
?>