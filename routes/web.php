<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SnippetController;
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



Route::get('yaameen-raaboaa-video-leaked', function(){
    return view('rick');
});
Route::redirect('.env', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-login', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-admin', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('.git', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('composer.lock', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('config.py', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('.htaccess', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('.htpass', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');


Route::get('/pages/{slug}',[PagesController::class, 'show'])->name('pages.show');

/*
Route::get('/snippets', [SnippetController::class, 'index'])->name('snippet.index');
Route::get('/snippet/create', [SnippetController::class, 'create'])->name('snippet.create');

Route::get('/snippet/{snippet}', [SnippetController::class, 'show'])->name('snippet.show');
Route::post('/snippet', [SnippetController::class, 'store'])->name('snippet.store');

Route::get('/short-link-generate', 'ShortLinkController@create')->name('shorten.link.create');
Route::post('/short-link-generate', 'ShortLinkController@store')->name('shorten.link.store');
   
Route::get('/s/{code}', 'ShortLinkController@shortenLink')->name('shorten.link');

*/
Route::get('/',[BlogController::class, 'index'])->name('blog.index');
Route::get('/{slug}',[BlogController::class, 'show'])->name('blog.show');
Route::post('/comments', [CommentsController::class, 'store'])->name('comment.store');






