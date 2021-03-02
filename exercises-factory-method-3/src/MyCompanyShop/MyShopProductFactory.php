<?php


namespace Patterns\MyCompanyShop;


use Patterns\ShopingCartFramework\ProductFactoryInterface;
use Patterns\ShopingCartFramework\ProductInterface;


    // @TODO implement MyShopProductFactory with internal database of:
    //        $database = [
    //            'BumperSticker1' => 'Cool bumper sticker',
    //            'CoffeeTableBook5' => 'Coffee Table book',
    //        ];
    

class MyShopProductFactory implements ProductFactoryInterface{

    protected $database = [
                    'BumperSticker1' => 'Cool bumper sticker',
                    'CoffeeTableBook5' => 'Coffee Table book'
                ];
    
    public function createProduct($productCode){
        return new MyShopProduct($productCode, $this->database[$productCode]);
    }

}