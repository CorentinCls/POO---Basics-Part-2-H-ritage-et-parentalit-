<?php

require_once "Truck.php";

$camion = new Truck('blue', 2, 200);

echo $camion->forward();
echo $camion->brake();
$load = 150;
echo $camion->isFull($load);