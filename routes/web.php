<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

Route::get('/profile'
    , [App\Http\Controllers\ProfileController::class, 'index'])
    ->name('profile');

Route::get('/profile/create'
    ,[\App\Http\Controllers\ProfileController::class, 'create'])
    ->name('profile.create');

Route::post('/profile/postCreate'
    ,[\App\Http\Controllers\ProfileController::class, 'postCreate'])
    -> name('profile.postCreate');

Route::get('/profile/edit'
    ,[\App\Http\Controllers\ProfileController::class, 'edit'])
    ->name('profile.edit');

Route::post('/profile/{id}/edit'
    ,[\App\Http\Controllers\ProfileController::class, 'postEdit'])
    -> name('profile.postEdit');

// Route::resource('post', App\Http\Controllers\PostController::class);


Route::get('/post/create'
    ,[\App\Http\Controllers\PostController::class, 'create'])
    -> name('post.create');

Route::post('/post/share'
    ,[\App\Http\Controllers\PostController::class, 'share'])
    -> name('post.share');

Route::get('/post/{id}/edit'
    ,[\App\Http\Controllers\PostController::class, 'edit'])
    -> name('post.edit');

Route::post('/post/{id}/update'
    ,[\App\Http\Controllers\PostController::class, 'update'])
    -> name('post.update');

Route::get('/post/{id}/delete'
    ,[\App\Http\Controllers\PostController::class, 'delete'])
    -> name('post.delete');


