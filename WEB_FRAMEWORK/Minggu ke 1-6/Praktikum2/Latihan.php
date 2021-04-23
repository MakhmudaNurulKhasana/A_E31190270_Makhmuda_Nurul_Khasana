<?php
class laptop {
    // buat property untuk class laptop
    public $pemilik;
    public $merk;
   
    // buat method untuk class laptop
    public function hidupkan_laptop($pemilik,$merk) {
      return "Hidupkan Laptop $merk milik $pemilik";
    }

    public function matikan_laptop($pemilik,$merk) {
        return "Matikan Laptop $merk milik $pemilik";
      }

    public function restart_laptop($pemilik,$merk) {
        return "Restart Laptop $merk milik $pemilik";
      }
 }
   
 // buat objek dari class laptop (instansiasi)
 $laptop= new laptop();
   
 echo $laptop->hidupkan_laptop("A.", "ASUS");
 echo "<br>";
 echo $laptop->matikan_laptop("B.", "Acer");
 echo "<br>";
 echo $laptop->matikan_laptop("C. ", "Lenovo");

 echo $laptop->hidupkan_laptop("C.", "Lenovo");
?>