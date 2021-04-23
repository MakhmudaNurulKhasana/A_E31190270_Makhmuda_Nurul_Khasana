<?php
//Declare class
class Buku {
    //properties
    public $judul = "judul",
            $pengarang = "pengarang",
            $penerbit = "penerbit",
            $tahun = "tahun",
            $cetakan = "cetakan";
}
$buku1 = new Buku();
var_dump($buku1);
?>