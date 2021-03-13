<?php
class Car {

    // public methods & properties.
    public $model;
    
    public function getModel ()
    {
    return "The car model is " . $this -> model;
    }
}
    $mercedes = new Car();  
    //akses property dari dalam class
    $mercedes -> model = "Mercedes benz";
    //akses property dari luar class
    echo $mercedes -> getModel();
?>