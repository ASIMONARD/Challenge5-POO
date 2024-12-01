<?php

require_once 'Car.php';
require_once 'Bike.php';

$car = new Car();
$bike = new Bike(5);
$bike2 = new Bike(10);
$bike3 = new Bike(15);

echo 'For car : <br>';
echo 'Lights on : ' . ($car->switchOn() ? 'true' : 'false') . '<br>';
echo 'light off : ' . ($car->switchoff() ? 'true' : 'false') . '<br><br>';

echo 'For bike : <br>';
echo 'Lights on if currentSpeed > 10 km/h : ' . ($bike->switchOn() ? 'true' : 'false') . '<br>';
echo 'light off : ' . ($bike->switchoff() ? 'true' : 'false') . '<br>';

echo 'Lights on if currentSpeed > 10 km/h : ' . ($bike2->switchOn() ? 'true' : 'false') . '<br>';
echo 'light off : ' . ($bike2->switchoff() ? 'true' : 'false') . '<br>';

echo 'Lights on if currentSpeed > 10 km/h : ' . ($bike3->switchOn() ? 'true' : 'false') . '<br>';
echo 'light off : ' . ($bike3->switchoff() ? 'true' : 'false') . '<br>';

?>