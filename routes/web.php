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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[PostController::class,'getAllPost'])->name('posts.getAllPost');
Route::get('single-post/{id}',[PostController::class,'showSinglePost'])->name('posts.showSinglePost');
Route::get('add-post',[PostController::class,'addPost'])->name('posts.addPost');
Route::post('add-postSubmit',[PostController::class,'addPostSubmit'])->name('posts.addPostSubmit');
Route::get('delete-post/{id}',[PostController::class,'deletePost'])->name('posts.deletePost');

Route::get('update-post/{id}',[PostController::class,'updatePost'])->name('posts.updatePost');
Route::post('update-post',[PostController::class,'updatePostSubmit'])->name('posts.updatePostSubmit');
