<?php

include "Car.php";

$car = new Car();

$car->brand = 'Honda';
$car->color = 'black';
$car->maxSpeed = 300;

$car->move(500);

print_r($car);

$car->stop();

print_r($car);


