<?php

namespace Patterns\ShopingCartFramework;
use Patterns\ShopingCartFramework\ProductFactoryInterface;

class Shop {


    protected $productFactory;

    public function __construct(ProductFactoryInterface $productFactory) {
        $this->productFactory = $productFactory;
    }



    public function listProducts(array $codes) {
        $output = [];
        foreach ($codes as $code) {
            $product = $this->productFactory->createProduct($code);
            $output[] = $product->getShopProductCode() . ' - ' . $product->getShopDescription();
        }
        return implode(PHP_EOL, $output);
    }
}

