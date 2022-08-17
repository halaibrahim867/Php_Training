<?php
require 'abstract.php';
class Car extends Vicles{

    public function great()
    {
     echo "hello";
    }
}
$car = new Car();
echo $car->name ="BMW";
$car->great();