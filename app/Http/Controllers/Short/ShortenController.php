<?php

namespace App\Http\Controllers\Short;

use App\Http\Controllers\Controller;

class ShortenController extends Controller
{
    public function index()
    {
        return view('short.shorten');
    }
}
