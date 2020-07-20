<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/pages/{slug}','PagesController@show')->name('pages.show');

Route::get('/','BlogController@index')->name('blog.index');
Route::get('/{slug}','BlogController@show')->name('blog.show');

Route::post('/comments/create', 'CommentsController@create')->name('comment.create');



