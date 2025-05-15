<?php

namespace App\Controllers;

class HomeController extends BaseController
{

    public function index()
    {
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