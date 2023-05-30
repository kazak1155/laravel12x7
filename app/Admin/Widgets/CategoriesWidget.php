<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget  extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Category::count();
        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-kraken',
            'title' => 'Счетчик категорий',
            'text' => "кол-во категорий:  {$count}",
            'button' => [
                'text' => 'перейти к списку категорий',
                'link' => ''
            ],
            'image' => 'storage/category.jpg'
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
