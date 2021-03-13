<?php
	class kendaraan {
		var $jumlahRoda;
		var $warna;
		var $bahanBakar;
		var $harga;
		var $merek;
		var $tahunPembuatan;
		
		function dapatSubsidi() {
			if ($this->bahanBakar = 'Premium' && $this->tahunPembuatan < 2005) $subsidi = 'Dapat';
			else $subsidi = 'Tidak Dapat';
			return $subsidi;
		}
		
		function hargaSecond() {
			if ($this->tahunPembuatan > 2010)
				$second = $this->harga * 20/100;
			else if ($this->tahunPembuatan >= 2010)
				$second = $this->harga * 30/100;
			else if ($this->tahunPembuatan <= 2005)
				$second = $this->harga * 40/100;
				return $second;		
		}
		
	}
?>