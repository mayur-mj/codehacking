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

Route::get('/admin',function(){
    return view('admin.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'admin'], function() {
    //

    Route::resource('admin/users', 'App\Http\Controllers\AdminUsersController');
    // Route::resource('admin/posts', 'App\Http\Controllers\AdminPostsController');

    Route::get('admin/posts', 'App\Http\Controllers\AdminPostsController@index')->name('posts.index');
    Route::get('admin/posts/create', 'App\Http\Controllers\AdminPostsController@create')->name('posts.create');
    Route::post('admin/posts/', 'App\Http\Controllers\AdminPostsController@store')->name('posts.store');
    Route::get('admin/posts/{post}/edit', 'App\Http\Controllers\AdminPostsController@edit')->name('posts.edit');
    Route::put('admin/posts/{post}', 'App\Http\Controllers\AdminPostsController@update')->name('posts.update');
    Route::delete('admin/posts/{post}', 'App\Http\Controllers\AdminPostsController@destroye')->name('posts.destroye');

});






