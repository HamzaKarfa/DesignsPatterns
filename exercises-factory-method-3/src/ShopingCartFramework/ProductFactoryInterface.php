<?php

namespace Patterns\ShopingCartFramework;

interface ProductFactoryInterface {
    public function createProduct($productCode);
}