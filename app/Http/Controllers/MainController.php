<?php

namespace App\Http\Controllers;

use App\Category;

class MainController extends Controller
{
    public function home()
    {
        $categories = Category::count();
        $categoriesTrashed = Category::onlyTrashed()->count();

        return view("home", compact('categories', 'categoriesTrashed'));
    }
}