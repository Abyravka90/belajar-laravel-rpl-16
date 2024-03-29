<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/*
    FRONTEND    
*/

Route::get('/', function () {
    return view('public.post.index');
})->name('post.index');

Route::get('/post/1/detail', function () {
    return view('public.post.detail');
})->name('post.detail');

/*
AUTHENTICATION
*/
Auth::routes();

/*
BACKEND
*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('post.create', 'PostController@create')->name('post.create');
Route::post('post.store', 'PostController@store')->name('post.store');

// Route::get('post.create', [PostController::class, 'create'])->name('post.create');
