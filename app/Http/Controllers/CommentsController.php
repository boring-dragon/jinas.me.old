<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentsController extends Controller
{    
    /**
     * create
     * 
     *  Create a comment
     *
     * @param  mixed $request
     * @return void
     */
    public function create(Request $request)
    {
        Comment::create($this->validate($request, [
            'post_id' => 'required',
            'name' => 'required',
            'comment' => 'required'
        ]));

        return back();
    }
}
