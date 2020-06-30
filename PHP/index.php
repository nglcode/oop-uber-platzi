<?php

require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");

$uberX = new UberX("CVB321", new Account("Angel Lorenzo", "1234567X"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("AFD987", new Account("Lorenzo Angel", "654987Y"), "Dodge", "Attitude");
$uberPool->printDataCar();


// $car = new Car("BCB19N", new Account("Angel Lorenzo", "AJW456"));
// $car->printDataCar();

// $car2 = new Car("POI98A", new Account("Lorenzo Angel", "A4E8A9"));
// $car2->printDataCar();