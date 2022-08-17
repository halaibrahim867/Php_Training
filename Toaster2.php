<?php
require 'Toaster.php';
class  ToasterPro extends  Toaster {


public function __construct()
{
    parent::__construct();

    $this->size =4;

}


}

$toast = new ToasterPro();
$toast->addSlice(1);
$toast->addSlice(1);
$toast->addSlice(1);

$toast->toast();
