<?php


require_once './vendor/autoload.php';

use app\Classes\Car;
use app\Classes\Bus;
use app\Classes\Bike;
use app\Model\Post;

$car = new Car();
$bike = new Bike();
$bus = new Bus();

echo $car->car() . '<br/>';

$post = new Post();
