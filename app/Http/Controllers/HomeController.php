<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Пример данных категорий
        $categories = [
            ['title' => 'Футболки', 'image' => 'https://i.ibb.co/r20N54Kb/tshirt.png '],
            ['title' => 'Украшения', 'image' => 'https://i.ibb.co/4RY6DzFP/hearts.png '],
            ['title' => 'Верхняя одежда', 'image' => 'https://i.ibb.co/B5ww0L1M/yojibomber.png '],
            ['title' => 'Обувь', 'image' => 'https://ibb.co/r22KnbNd '],
            ['title' => 'Аксессуары', 'image' => 'img/cap.png'],
        ];

        // Пример данных товаров
        $products = [
            ['title' => 'enfants riches derrpimes', 'price' => '48000 руб.', 'image' => 'img/shirt.png'],
            ['title' => 'julius t shirt', 'price' => '16500 руб.', 'image' => 'img/jultshirt.png'],
            ['title' => 'raf simons emelcodery', 'price' => '35000 руб.', 'image' => 'img/rubsvit.png'],
            ['title' => 'vetements hi-speed', 'price' => '35000 руб.', 'image' => 'img/vetmo.png'],
            ['title' => 'chrome hearts jeans', 'price' => '157000 руб.', 'image' => 'img/jeans.png'],
        ];

        return view('index', ['categories'=>$categories,'prodicts'=>$products]);
    }
}