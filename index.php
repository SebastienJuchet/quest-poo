<?php
require 'Bicycle.php';
require 'Car.php';

$bike = new Bicycle();
$bike->setColor('blue');
$bike->setCurrentSpeed(0);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(15) . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(15) . ' km/h' . '<br>';
echo $bike->brake();

$macqueen = new Car('Blue', 5, 'E85');
echo '<p>La voiture démarre ' . $macqueen->start() . '</p>';
echo '<p>' . $macqueen->forward() . '</p>';
echo $macqueen->break();