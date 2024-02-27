<?php

namespace App\Http\Controllers\Short;

use App\Http\Controllers\Controller;
use App\Models\Short\Link;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function list()
    {
        $perPage = env('PAGINATE_PER_PAGE', 5);

        $links = Link::paginate($perPage);

        return view('short.showlist', compact('links'));
    }

    public function show(string $link)
    {
        $link = Link::where('shortlink', $link)->first();

        return view('short.showlink', compact('link'));
    }
}
