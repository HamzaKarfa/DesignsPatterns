<?php

namespace App\Entities;

use App\Interfaces\ProductInterface;

class Product implements ProductInterface {

    protected $product;
    protected $productCode;
    protected $productWeight;
    protected $productDescription;

    public function __construct(array $product){
        $this->product = $product;
        $this->productCode = array_key_first ($this->product);
        $this->productDescription =  $this->product[$this->productCode][0];
        $this->productWeight =  $this->product[$this->productCode][1] ;
    }


    public function getShopProductCode():string
    {
        return $this->productCode;
    }
    public function getShopDescription():string
    {
        return $this->productDescription;
    }
    public function getShopWeight():int
    {
        return intval($this->productWeight);
    }


}