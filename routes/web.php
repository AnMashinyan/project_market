<?php

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

Route::get('/', [App\Http\Controllers\PostControler::class, 'index'])->name('home');
Route::get('article/{slug}', [App\Http\Controllers\PostControler::class, 'show'])->name('post.single');
Route::get('category/{slug}', [App\Http\Controllers\CategoryControler::class, 'show'])->name('categories.single');
Route::get('tag/{slug}', [App\Http\Controllers\TagControler::class, 'show'])->name('tags.single');
Route::get('search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('book', [App\Http\Controllers\BookController::class, 'index'])->name('book.single');
Route::get('task', [App\Http\Controllers\TaskController::class, 'index'])->name('task.single');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.index');
    Route::resource('categories', '\App\Http\Controllers\Admin\CategoryController');
    Route::resource('tags', '\App\Http\Controllers\Admin\TagController');
    Route::resource('posts', '\App\Http\Controllers\Admin\PostController');
    Route::resource('books', '\App\Http\Controllers\Admin\BookController');
    Route::resource('tasks', '\App\Http\Controllers\Admin\TaskController');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('register', [\App\Http\Controllers\UserController::class, 'create'])->name('register.create');
    Route::post('store', [\App\Http\Controllers\UserController::class, 'store'])->name('register.store');
    Route::get('login', [\App\Http\Controllers\UserController::class, 'loginForm'])->name('login.create');
    Route::post('loin', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
});

Route::get('logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout')->middleware('auth');




