<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    function index()
    {
        return view('pages/belanja');
    }
}
