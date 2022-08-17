<?php

namespace App\Model;

Class Product{
    private $productName;
    public function __construct($productName)
    {
        $this->productName=$productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

}

$publish_date = new \DateTime();
echo $publish_date->format('Y-m-d');
