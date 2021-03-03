<?php


namespace App\Entities;

use App\Interfaces\ShippingMethodInterface;
use App\Interfaces\ProductInterface;

class ShippingMethod implements ShippingMethodInterface{

    protected $shippingMethodName;
    protected $shippingMethodMiles;
    protected $shippingMethodWeight;

    public function __construct(array $ShippingMethod)
    {
        $this->shippingMethodName = array_key_first($ShippingMethod);
        $this->shippingMethodMiles = $ShippingMethod[$this->shippingMethodName][0] ;
        $this->shippingMethodWeight = $ShippingMethod [$this->shippingMethodName][1];
    }

    public function getName():string
    {
        return $this->shippingMethodName;
    }
    public function getCostEstimate($miles, ProductInterface $product):string
    {
        //TODO calculate Cost 
        return strval($miles *  $this->shippingMethodMiles + $product->getShopWeight() * $this->shippingMethodWeight);
    }
}