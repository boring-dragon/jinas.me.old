<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Wink\WinkPage;

class PagesController extends Controller
{

    public function show($slug)
    {
        $pages = WinkPage::where('slug', $slug)->firstOrFail();
        return view('blog.article', [
            'article' => $pages
        ]);
    }
}
