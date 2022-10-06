<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Camion.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck ('red', 3, 'fuel', 20, 5);
echo "la camion est " . $truck->getColor() . "<br>" .
     "possède " . $truck->getnbSeats() . " sièges<br>" .
     "fonctionne à ". $truck->getEnergy() . "<br>" .
     "et a une capacité de stockage de  " . $truck->getStorageCapacity() . " m³<br>" . "<br>" .
     "la charge du camion est à " . $truck->getload() . "<br>" .
     "il peut être charger à une vitesse de " . $truck->getSpeedLoading() . " m³ par round<br>" . "<br>" ;
     $truck->loading() ;

echo  "<br><br><br>"  . $truck->forward() . " your speed is " . $truck->getCurrentSpeed() ."km/h <br>" . $truck->brake();

