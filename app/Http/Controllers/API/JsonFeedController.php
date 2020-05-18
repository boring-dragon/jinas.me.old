<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Wink\WinkPost;

class JsonFeedController extends Controller
{
    public function index()
    {
        return response()->json(
            WinkPost::with('tags')
                ->live()
                ->orderBy('publish_date', 'DESC')
                ->simplePaginate(8)
                
        );
    }
}
