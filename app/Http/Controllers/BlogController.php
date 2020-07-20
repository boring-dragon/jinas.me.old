<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkAuthor;
use App\Comment;
use Illuminate\Support\Facades\Redis;

class BlogController extends Controller
{    
    /**
     * index
     * 
     *  Loads all the articles
     *
     * @return void
     */
    public function index(Request $request)
    {
        $author = WinkAuthor::first();
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(8);


        return view('blog.index', [
            'posts' => $posts,
            'author' => $author
        ]);
    }
    
    /**
     * show
     * 
     *  Gets a single article from db
     *
     * @param  mixed $slug
     * @return void
     */
    public function show($slug)
    {
       
        $post = WinkPost::where('slug', $slug)
        ->with('tags')
        ->firstOrFail();

        $comments = Comment::where('post_id', $post->id)
        ->orderBy('created_at', 'DESC')
        ->take(10)
        ->get();

        return view('blog.article', [
            'article' => $post,
            'comments' => $comments,
            'views' => Redis::incr("article.{$slug}.view")
        ]);
    }
}
