<?php
require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('Black', 3, 250, 3500);
var_dump($truck);