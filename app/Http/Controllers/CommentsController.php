<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentsController extends Controller
{    
        
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        Comment::create($this->validate($request, [
            'post_id' => 'required',
            'name' => 'required',
            'comment' => 'required'
        ]));

        return redirect()->back()->with('success', 'Comment published 🔥');   
    }
}
