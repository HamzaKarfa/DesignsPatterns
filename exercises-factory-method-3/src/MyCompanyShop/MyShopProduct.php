<?php

namespace Patterns\MyCompanyShop;

use Patterns\ShopingCartFramework\ProductInterface;

class MyShopProduct  implements  ProductInterface{

    protected $productCode;
    protected $description;

    public function __construct($productCode, $description)
    {
        $this->productCode = $productCode;
        $this->description = $description;
    }

    public function getShopProductCode(){
        return $this->productCode;
    }
    
    public function getShopDescription(){
        return $this->description;
    }
}