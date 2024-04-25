<?php

namespace App\Http\Controllers\Short;

use App\Http\Controllers\Controller;
use App\Http\Requests\Short\RedirectRequest;
use App\Models\Short\Link;
use Exception;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function index(string $shortlink)
    {
        $link = Link::where('shortlink', $shortlink)->first();

        // Get amount of call of the shortened link and enlarge it by 1
        $counter = $link->counter + 1;

        $link->update(['counter' => $counter]);

        return $link ? Redirect::away($link->url) : redirect()->back()->with('error', 'Something wrong with URL');
    }
}
