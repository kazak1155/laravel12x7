<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{

    protected $config = [];

    public function run()
    {
        $count = Product::count();
        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-smile',
            'title' => 'Счетчик продуктов',
            'text' => "кол-во пролуктов:  {$count}",
            'button' => [
                'text' => 'перейти к списку продуктов',
                'link' => ''
            ],
            'image' => 'storage/product.png'
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }

}
