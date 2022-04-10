<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\BookmarkController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/post', function () {
   return view('post');
})->middleware(['auth'])->name('post');



Route::resource('posts','PostsController');
//Route::resource('posts','CommentsController');
Route::post('posts/bookmark',[PostsController::class,'bookmark']);
Route::post('posts/{post}/comments',[CommentsController::class,'store']);
require __DIR__.'/auth.php';
