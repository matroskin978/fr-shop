<?php

namespace App\Controllers;

class HomeController extends BaseController
{

    public function index()
    {

//        dump($_SESSION);
//        session()->set('key1', 'Value1');
//        session()->set('key2.key2-1', 'Value2');
//        session()->set('cart.5', ['title' => 'Product 5', 'qty' => 2, 'price' => 100]);
//        session()->set('cart.12', ['title' => 'Product 12', 'qty' => 1, 'price' => 130]);
//        session()->set('cart.12.slug', 'product-12');
//        session()->remove('cart');
//        session()->remove('key1');
//        session()->remove('key2');
//        dump(session()->get('cart'));
//        dump(session()->has('cart.5.title'));

        $sales_products = db()->query("select * from products where is_sale = 1 order by id desc limit 10")->get();
        $root_categories = db()->query("select * from categories where parent_id = 0")->get();

        return view('home/index', [
            'title' => 'Home page',
            'sales_products' => $sales_products,
            'root_categories' => $root_categories,
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