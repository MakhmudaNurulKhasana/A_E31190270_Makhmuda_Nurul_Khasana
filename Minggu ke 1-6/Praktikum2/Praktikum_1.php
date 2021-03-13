<?php

class Car {
    //properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
    
    //method = hello
    public function hello()
    {
        return "Beep I am a <i>" . $this -> comp . 
        "</i>, and I am <i>" . $this -> color;
}
}

//create object di class.
$bmw = new Car();
$mercedes = new Car();

// Set values dari class properties.
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

// Call helio method untuk Sbmw object.
echo $bmw -> hello();

?>