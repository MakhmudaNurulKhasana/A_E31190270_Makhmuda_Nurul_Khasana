<?php
//Declare class
class Car {
    //properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    //method = hello
    public function hello()
    {
        return "beep";
    }
}
//membuat instance
$bmw = new Car ();
$mercedes = new Car ();

//Get Values 

echo $bmw -> color; // beige
echo "<br/>";
echo $mercedes -> color; // beige
echo "<hr/>";

// Set Values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//Get Values
echo $bmw -> color; // blue
echo "<br/>";
echo $mercedes -> color; // beige
echo "<br/>";
echo $bmw -> comp; // BMW
echo "<br/>";
echo $mercedes -> comp; // Mercedez Benz
echo "<hr/>";

//method get a beep
echo $bmw -> hello(); //beep
echo "<br/>";
echo $mercedes -> hello(); //beep
?>