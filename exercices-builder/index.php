<?php
require 'vendor/autoload.php';





// namespace MyCompanyShop {

//     use ShopingCartFramework\ShopFactoryInterface;
//     use ShopingCartFramework\ProductInterface;
//     use ShopingCartFramework\ShippingMethodInterface;

//     // @TODO Implement the abstract factory MyShopProductFactory

//     // @TODO Implement the product MyShopProduct

//     // @TODO Implement Shipping Method MyShippingMethod


// }


    use App\Entities\Shop;
    use App\Factories\MyShopProductFactory;
 
    $productData = [ 
        // id => [name, weight]
        'BumperSticker1' => ['Bumper Sticker Item #1', 1],
        'BumperSticker3' => ['Bumper Sticker Item #3', 1],
        'BumperSticker5' => ['Bumper Sticker Item #5', 1],
        'CoffeeTableBook6' => ['Coffee Table Book Item #6 (500 pages)', 5],
        'CoffeeTableBook7' => ['Coffee Table Book Item #7 (300 pages)', 3],
        'CoffeeTableBook9' => ['Coffee Table Book Item #9 (900 pages)', 9],
    ];

    $shippingMethodData = [
        // code => [miles, weight] 
        'UPS' => [1.4, 1.1],
        'FEXED' => [2.2, 1.3], 
    ];

    $shop = new Shop(new MyShopProductFactory($productData, $shippingMethodData));

    $targetOutput = <<<EOS
                        BumperSticker1 - Bumper Sticker Item #1 / via: UPS, cost: $15.1\r
                        CoffeeTableBook6 - Coffee Table Book Item #6 (500 pages) / via: UPS, cost: $19.5
                    EOS;

    // simulation of Shopping Cart Listings Page

    $actualOutput = $shop->listProductsWithShippingCost(['BumperSticker1', 'CoffeeTableBook6'], 'UPS', 10);
    echo $actualOutput.'<br>';
    echo $targetOutput.'<br>';

    assert($actualOutput == $targetOutput);
