<?php

namespace App\Interfaces;

interface ShopFactoryInterface {

    public function createProduct($productCode);
    public function createShippingMethod($name);
    
}
