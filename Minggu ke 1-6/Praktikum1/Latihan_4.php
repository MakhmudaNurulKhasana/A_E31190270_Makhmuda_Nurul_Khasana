<?php 
	class murid {
// property
	var $nama;
    var $nim;
    var $kelas;
	var $jeniskelamin;
	var $nilai;
// method
	function status(){
		if ($this->nilai >= 60) $status = 'Lulus';
		else $status = 'Gagal';
		return $status;
	}

    function nama(){
        return "Makhmuda Nurul <br/>";
    }
    
    function nim(){
        return "E31190270 <br/>";
    }
}

// instansiasi Object  
	$ken = new murid();

// memberikan nilai yang terdapat pada property
	$ken->kelas="MIF A";
    $ken->jeniskelamin="Perempuan";
	$ken->nilai=75;

//menampilkan atau mencetak hasil dari method 
	echo "Nama :".$ken->nama();
	echo "<br>";
    echo "NIM :".$ken->nim();
	echo "<br>";
	echo "Jenis kelamin :".$ken->jeniskelamin;
	echo "<br>";
	echo "Nilai :".$ken->nilai;
	echo "<br>";
	echo "Keterangan :".$ken->status();
?>