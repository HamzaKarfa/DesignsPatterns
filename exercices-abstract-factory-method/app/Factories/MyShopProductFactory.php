<?php

namespace App\Factories;

use App\Entities\Product;
use App\Entities\ShippingMethod;
use App\Interfaces\ShopFactoryInterface;
use Exception;

class MyShopProductFactory implements ShopFactoryInterface {
 
    protected $allProductData;
    protected $shippingMethodData;

    public function __construct(array $allProductData, array $shippingMethodData)
    {
        $this->allProductData = $allProductData;
        $this->shippingMethodData = $shippingMethodData;
    }

    public function createProduct($productCode)
    {   // Search if product code exists in array Productsdata
        if (array_key_exists ( $productCode, $this->allProductData )) {
            return new Product(array($productCode => $this->allProductData[$productCode]));
        }else{
            throw new Exception("Product not found", 1);
        }
    }

    public function createShippingMethod($name)
    {   // Search if name exists in array ShippingsMethods

        if (array_key_exists ( $name, $this->shippingMethodData )) {
            // return new Product(array($name => $this->allProductData[$name]));
            return new ShippingMethod(array($name => $this->shippingMethodData[$name]));
        }else{
            throw new Exception("Shipping not found", 1);
        }
    }
}