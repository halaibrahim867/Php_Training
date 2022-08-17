<?php

require 'abstract.php';
class Motor extends Vicles
{

public function great(string $name): string
{
    return $name;

}


}

$motor = new Motor();
echo $motor->great("55");