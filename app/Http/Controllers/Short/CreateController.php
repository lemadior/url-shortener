<?php

namespace App\Http\Controllers\Short;

use App\Http\Controllers\Controller;
use App\Http\Requests\Short\CreateRequest;
use App\Models\Short\Link;
use App\Services\Short\SymbolGeneration;
use Exception;

class CreateController extends Controller
{
    public function index(CreateRequest $request)
    {
        $linkData = [];

        $data = $request->validated();

        $shortLinkLength = env('SHORTENED_LINK_LENGTH', 2);

        $randomChars = new SymbolGeneration($shortLinkLength);

        // Get all existent aliases and turn it into arrray. Only Aliases!
        $existentLinks = Link::all()->pluck('shortlink')->toArray();

        $shortLink = '';

        // Get unique chars sequence
        while (!$shortLink) {
            $str= $randomChars->getShortLink();

            if (in_array($str, $existentLinks)) {
                continue;
            }

            $shortLink = $str;
        }

        $linkData['shortlink'] = $shortLink;
        $linkData['url'] = $data['full_url'];
        $linkData['name'] = $data['name'];
        $linkData['access_counter'] = 0;

        try {
            Link::create($linkData);
        } catch (Exception $err) {
            return redirect(route('shorten'))->with('error', $err->getMessage());
        }

        return redirect()->route('link', $shortLink);
    }
}
