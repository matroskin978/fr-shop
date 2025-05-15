<?php

/** @var \PHPFramework\Application $app */

use App\Controllers\HomeController;

const MIDDLEWARE = [
    'auth' => \PHPFramework\Middleware\Auth::class,
    'guest' => \PHPFramework\Middleware\Guest::class,
];

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/test', [HomeController::class, 'test']);

// seed
$app->router->get('/seed', function () {
    // categories
    require_once __DIR__ . '/seeders/categories.php';

    // products
//    require_once __DIR__ . '/seeders/products.php';

    return 'Ok';
});
