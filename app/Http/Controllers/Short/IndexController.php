<?php

namespace App\Http\Controllers\Short;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('main.index');
    }
}
