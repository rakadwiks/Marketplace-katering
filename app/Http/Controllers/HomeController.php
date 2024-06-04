<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        // $categories = Category::take(6)->get();
        // $products = Product::with('galleries')->take(8)->get();
        // $header = HeaderProduct::all();
        // $media = Media::all();
        return view('index', [
            // 'categories' => $categories,
            // 'products' => $products,
            // 'header' => $header,
            // 'media' => $media
        ]);
    }
}
