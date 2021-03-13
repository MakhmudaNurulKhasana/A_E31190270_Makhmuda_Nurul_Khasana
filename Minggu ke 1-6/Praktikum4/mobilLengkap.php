<?php 
// class parent
class mobilLengkap{

	// property class manusia
	public $mobil;	
 
 	// method pada class manusia
	function nontonTV($mobil){
		$this->nama_saya=$saya;
	}
	
}

// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{

	// property class teman
	public $nama_teman;
 
 	// method pada class teman
	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
}

// instansiasi class teman
$malasngoding = new teman;

// method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia
$malasngoding->berinama(" MALAS NGODING ");
$malasngoding->berinamateman(" Diki ");

// menampilkan isi property
echo "Nama Saya :" . $malasngoding->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $malasngoding->nama_teman;
 
?>