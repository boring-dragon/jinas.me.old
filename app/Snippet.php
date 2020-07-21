<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Snippet extends Model
{
    use Uuid;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $guarded = [];
}
