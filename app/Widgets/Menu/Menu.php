<?php

namespace App\Widgets\Menu;

class Menu
{

    protected array $data;
    protected array $tree;
    protected string $menuHtml;

    protected string $table = 'categories';
    protected string $tpl = 'menu_tpl';
    protected string $container = 'ul';
    protected string $class = 'menu';
    protected int $cacheTime = 3600;
    protected string $cacheKey = 'menu';
    protected array $attrs = [];
    protected string $prepend = '';
    protected string $append = '';

    public function __construct(array $options = [])
    {
        $this->getOptions($options);
        $this->tpl = __DIR__ . "/{$this->tpl}.php";
        $this->run();
    }

    protected function run()
    {
        $this->data = db()->query("select * from {$this->table}")->getAssoc();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        $this->output();
    }

    protected function output()
    {
        echo $this->menuHtml;
    }


    protected function getOptions($options)
    {
        foreach ($options as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    protected function getTree(): array
    {
        $tree = [];
        $data = $this->data;

        foreach ($data as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            } else {
                $data[$node['parent_id']]['children'][$id] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '')
    {
        $str = '';
        foreach ($tree as $id => $item) {
            $str .= $this->catToTemplate($item, $tab, $id);
        }
        return $str;
    }

    protected function catToTemplate($item, $tab, $id)
    {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }

}