<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return view('category.foodbeverage');
    }
    public function beautyHealth()
    {
        return view('category.beautyHealth');
    }
    public function homeCare()
    {
        return view('category.homeCare');
    }
    public function babykid()
    {
        return view('category.babykid');
    }
}
