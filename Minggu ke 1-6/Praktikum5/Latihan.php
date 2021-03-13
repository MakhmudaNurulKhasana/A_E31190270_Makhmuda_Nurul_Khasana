<?php
interface hitungLuas{
    public function hitungLuasPersegi();
    public function hitungLuasSegitiga();
    //public function hitungLuasLingkaran(); 
}

class Persegi implements hitungLuas{
    protected $sisi = 4;
    public function hitungLuasPersegi(){
    return "$sisi * $sisi";
    }
}

class Segitiga implements hitungLuas{
    protected $sisi = 8;
    public function hitungLuasSegitiga(){    
    return "($sisi * $sisi)/2";
    }
}
//buat Object
$obj = new Persegi();
echo $obj->hitungLuasPersegi();
echo $obj->hitungLuasSegitiga();
//echo $obj->mundur();
?>