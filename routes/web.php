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

Route::get('/','App\Http\Controllers\HomeController@index');

Auth::routes();

Route::get('post/{id}','App\Http\Controllers\AdminPostsController@post')->name('home.post');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'admin'], function() {


    //-----------Admin Routes---------------

    Route::get('/admin','App\Http\Controllers\AdminController@index');


    //------------Admin Users Routes------------------------

    Route::resource('admin/users', 'App\Http\Controllers\AdminUsersController');


    //---------------Admin Posts Routes---------------------

    Route::get('admin/posts', 'App\Http\Controllers\AdminPostsController@index')->name('posts.index');
    Route::get('admin/posts/create', 'App\Http\Controllers\AdminPostsController@create')->name('posts.create');
    Route::post('admin/posts/', 'App\Http\Controllers\AdminPostsController@store')->name('posts.store');
    Route::get('admin/posts/{post}/edit', 'App\Http\Controllers\AdminPostsController@edit')->name('posts.edit');
    Route::put('admin/posts/{post}', 'App\Http\Controllers\AdminPostsController@update')->name('posts.update');
    Route::delete('admin/posts/{post}', 'App\Http\Controllers\AdminPostsController@destroye')->name('posts.destroye');


    //----------------Admin Categories Routes---------------------

    Route::resource('admin/categories', 'App\Http\Controllers\AdminCategoriesController');


    //--------------------Admin Medias Routes---------------------------

     Route::resource('admin/medias', 'App\Http\Controllers\AdminMediasController');

     Route::delete('admin/delete/media','App\Http\Controllers\AdminMediasController@deleteMedia')->name('delete.media');


    //-------------------Coments Routes---------------------------------

    Route::resource('admin/comments', 'App\Http\Controllers\PostCommentsController');


    //-------------------Posts Comments Replies------------------------------

    Route::resource('admin/comments/replies', 'App\Http\Controllers\CommentRepliesController');

});


Route::group(['middleware' => 'auth'], function() {


    Route::post('comment/reply','App\Http\Controllers\CommentRepliesController@createReply');


});
