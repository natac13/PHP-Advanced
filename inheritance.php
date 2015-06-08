<?php

class Car {
    // From what I can find both public and var have the same effect
    public $wheels = 4;
    var $doors = 4;

    function wheelsdoors() {
       return $this->wheels + $this->doors;
    }
}

class CompactCar extends Car {
// CompactCar appears to have nothing in it. However that is the beauty of
// coding and not REPEATING oneself!
// In this case everything in this CompactCar class is the same as where
// it became extended from (Car in this case)
// However variables and methods of a class can be overridden by just
// redeclaring the variable or method in the inheriting class
//
    var $doors = 2;

}

$car1 = new Car();
$car2 = new CompactCar();

echo "Car 1 is: <br>";
echo $car1->wheels . "<br>";
echo $car1->doors . "<br>";
echo $car1->wheelsdoors() . "<br>";
echo "<br>";

echo "Car 2 is: <br>";
echo $car2->wheels . "<br>";
echo $car2->doors . "<br>";
echo $car2->wheelsdoors() . "<br>";
echo "<br>";


// Some useful functions when dealing with classes and the parents.
// This is for dynamic use
echo "Car parent:" . get_parent_class('Car') . "<br>";
echo "CompactCar parent:" . get_parent_class("CompactCar") . "<br>";
echo "<br>";
// reads and works like: 1st arg is a subclass of 2nd arg
echo is_subclass_of('Car', 'Car') ? 'true car for car' : 'false car for car';
echo "<br>";
echo is_subclass_of("CompactCar", "Car") ? "true compact for car" : 'false
                    compact for car';
echo "<br>";
echo is_subclass_of("Car", "CompactCar") ? "true" : "false";


?>
