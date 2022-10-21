<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('allpost', [PostController::class, 'getAllPosts'])->name('get.posts');
Route::get('add-post', [PostController::class, 'addPost'])->name('add.posts');
Route::post('add-post-submit', [PostController::class, 'addPostSubmit'])->name('add.postsubmit');
Route::get('singlepost/{id}', [PostController::class, 'getPostById'])->name('single.post');
Route::get('deletepost/{id}', [PostController::class, 'deletePost'])->name('delete.post');
Route::get('editpost/{id}', [PostController::class, 'editPost'])->name('edit.post');
Route::post('update-post', [PostController::class, 'updatePost'])->name('update.post');
