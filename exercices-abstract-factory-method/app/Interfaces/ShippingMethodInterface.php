<?php

namespace App\Interfaces;

use App\Interfaces\ProductInterface;


interface ShippingMethodInterface {

    public function getName();
    public function getCostEstimate($miles, ProductInterface $product);
    
}