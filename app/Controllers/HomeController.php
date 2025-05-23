<?php

namespace App\Controllers;

use App\Helpers\Cart\Cart;

class HomeController extends BaseController
{

    public function index()
    {
//        dump(session()->get('cart.1'));
//        dump(Cart::addToCart(15, 5));
//        dump(Cart::addToCart(10, 2));
//        dump(Cart::addToCart(2, 5));
//        Cart::clearCart();
//        dump(Cart::updateProductQuantity(10, 3));
//        dump(Cart::getCart());
//        dump(Cart::getCartQuantityItems());
//        dump(Cart::getCartQuantityTotal());
//        dump(Cart::getCartSum());
//        dump(1540 * 5 + 311 * 3 + 312 + 463 * 5);
//        dump(Cart::removeProductFromCart(5));
//        dump(Cart::hasProductInCart(10));
        $sales_products = db()->query("select * from products where is_sale = 1 order by id desc limit 10")->get();
        $root_categories = db()->query("select * from categories where parent_id = 0")->get();

        return view('home/index', [
            'title' => 'Home page',
            'sales_products' => $sales_products,
            'root_categories' => $root_categories,
        ]);
    }

    public function test()
    {
        return view('home/test', [
            'title' => 'Test page',
        ]);
    }


}

/*

$_SESSION['cart'] = [
    5 => [
        'title' => 'Product 5',
        'slug' => 'product-5',
        'price' => 100,
        'qty' => 7,
        'image' => 'img_src',
    ],
    12 => [
        'title' => 'Product 12',
        'slug' => 'product-12',
        'price' => 130,
        'qty' => 1,
        'image' => 'img_src',
    ],
];

 */