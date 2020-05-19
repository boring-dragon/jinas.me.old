<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Wink\Wink;
use Wink\WinkPost;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'comment',
        'post_id'
    ];

    public function post()
    {
        $this->belongsTo(WinkPost::class,'post_id');
    }
}
