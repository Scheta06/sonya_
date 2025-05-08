<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Пример статических данных
        $categories = [
            ['title' => 'Футболки', 'image' => 'https://i.ibb.co/r20N54Kb/tshirt.png '],
            ['title' => 'Украшения', 'image' => 'https://i.ibb.co/4RY6DzFP/hearts.png '],
            ['title' => 'Верхняя одежда', 'image' => 'https://i.ibb.co/B5ww0L1M/yojibomber.png '],
            ['title' => 'Обувь', 'image' => 'https://ibb.co/r22KnbNd '],
            ['title' => 'Аксессуары', 'image' => 'img/cap.png'],
        ];

        return view('category', compact('categories'));
    }
}