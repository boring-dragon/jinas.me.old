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
            $this->tranform(
                WinkPost::with('tags')
                    ->live()
                    ->orderBy('publish_date', 'DESC')
                    ->get()
                    ->toArray()
            )

        );
    }

    protected function tranform(array $data)
    {
        foreach ($data as $item) {
            $feed[] =  [
                'title' => $item["title"],
                'excerpt' => $item["excerpt"],
                'article_link' => "https://jinas.me/".$item["slug"],
                'publish_date' => $item["publish_date"]
            ];
        }
        return $feed;
    }
}
