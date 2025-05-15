<?php

namespace App\Controllers;

use PHPFramework\Controller;

class BaseController extends Controller
{

    public function __construct()
    {
        $menu_catalog = (new \App\Widgets\Menu\Menu([
            'table' => 'categories',
            'tpl' => 'mega_menu_tpl',
            'container' => 'div',
            'class' => 'container dropdown-menu megamenu',
            'prepend' => '<div class="row g-3">',
            'append' => '</div>',
            'attrs' => ['role' => 'menu', 'id' => 'mega-menu'],
            'cacheTime' => 20,
            'cacheKey' => 'catalog-menu'
        ]))->run();
        view()->twig->addGlobal('menu_catalog', $menu_catalog);
        view()->twig->addGlobal('csrf_meta', get_csrf_meta());
    }


}