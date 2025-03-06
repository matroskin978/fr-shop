<?php

namespace App\Controllers;

class HomeController extends BaseController
{

    public function index()
    {
//        session()->setFlash('success', 'Success message');
//        session()->setFlash('error', 'Error message');
        return view('home/index', [
            'title' => 'Home page',
        ]);
    }

    public function test()
    {
        return view('home/test', [
            'title' => 'Test page',
        ], 'main');
    }

}