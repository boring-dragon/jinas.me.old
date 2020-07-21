<?php

namespace App\Http\Controllers;

use App\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    public function create()
    {
        return view('shortenlink.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url'
         ]);

        $shortenUrl = ShortLink::create([
            "code" => Str::random(6),
            "link" => $request->link
        ]);

        return redirect()->back()->with('shorten', "Shorten Code: " . $shortenUrl->code);
    }

    public function shortenLink($code)
    {
        $shortenUrl = ShortLink::where('code', $code)->first();
   
        return redirect($shortenUrl->link);
    }
}
