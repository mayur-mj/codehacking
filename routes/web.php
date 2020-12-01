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

    //------------Admin Users Routes------------------------

    Route::resource('admin/users', 'App\Http\Controllers\AdminUsersController');
    // Route::resource('admin/posts', 'App\Http\Controllers\AdminPostsController');


    //---------------Admin Posts Routes---------------------

    Route::get('admin/posts', 'App\Http\Controllers\AdminPostsController@index')->name('posts.index');
    Route::get('admin/posts/create', 'App\Http\Controllers\AdminPostsController@create')->name('posts.create');
    Route::post('admin/posts/', 'App\Http\Controllers\AdminPostsController@store')->name('posts.store');
    Route::get('admin/posts/{post}/edit', 'App\Http\Controllers\AdminPostsController@edit')->name('posts.edit');
    Route::put('admin/posts/{post}', 'App\Http\Controllers\AdminPostsController@update')->name('posts.update');
    Route::delete('admin/posts/{post}', 'App\Http\Controllers\AdminPostsController@destroye')->name('posts.destroye');


    //----------------Admin Categories Routes---------------------


    Route::resource('admin/categories', 'App\Http\Controllers\AdminCategoriesController');


    // Route::get('admin/categories','App\Http\Controllers\AdminCategoriesController@index')->name('categories.index');
    // Route::get('admin/categories/create', 'App\Http\Controllers\AdminCategoriesController@create')->name('categories.create');
    // Route::post('admin/categories/', 'App\Http\Controllers\AdminCategoriesController@store')->name('categories.store');
    // Route::get('admin/categories/{category}/edit', 'App\Http\Controllers\AdminCategoriesController@edit')->name('categories.edit');
    // Route::put('admin/categories/{category}', 'App\Http\Controllers\AdminCategoriesController@update')->name('categories.update');
    // Route::delete('admin/categories/{category}', 'App\Http\Controllers\AdminCategoriesController@destroye')->name('categories.destroye');

    //--------------------Admin Medias Routes---------------------------

     Route::resource('admin/medias', 'App\Http\Controllers\AdminMediasController');
    // Route::get('admin/medias/','App\Http\Controllers\AdminMediasController@index')->name('medias.index');
    // Route::get('admin/medias/create','App\Http\Controllers\AdminMediasController@create')->name('medias.create');
    // Route::get('admin/medias/{media}/edit','App\Http\Controllers\AdminMediasController@edit')->name('medias.edit');
});






