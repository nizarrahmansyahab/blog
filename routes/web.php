<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;



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
Auth::routes();

Route::get('/', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/isi-post/{slug}', [App\Http\Controllers\BlogController::class, 'isi_blog'])->name('blog.isi');
Route::get('/list-post', [App\Http\Controllers\BlogController::class, 'list_blog'])->name('blog.list');
Route::get('/list-category/{category}', [App\Http\Controllers\BlogController::class, 'list_category'])->name('blog.category');
Route::get('/cari', [App\Http\Controllers\BlogController::class, 'cari'])->name('blog.cari');




Route::group(['middleware' => 'auth'], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/category', CategoryController::class);
Route::resource('/tag', TagController::class);

Route::get('/post/tampil_hapus', [PostController::class, 'tampil_hapus'])->name('post.tampil_hapus');
Route::get('/post/restore/{id}', [PostController::class, 'restore'])->name('post.restore');
Route::delete('/post/kill/{id}', [PostController::class, 'kill'])->name('post.kill');
Route::resource('/post', PostController::class);
Route::resource('/user', UserController::class);
});




