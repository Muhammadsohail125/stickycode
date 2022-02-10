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
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

    // Author Routes
    Route::resource('author', 'AuthorController');
    Route::put('author/{author}/status', 'AuthorController@status');

    // Book Routes
    Route::resource('book', 'BookController');
    Route::put('book/{book}/status', 'BookController@status');

    // Category Routes
    Route::resource('category', 'CategoryController');
    Route::put('category/{category}/status', 'CategoryController@status');
});

// Author Routes
// Route::delete('admin/author/{author}', 'Admin\AuthorController@destroy');
// Route::put('admin/author/{author}', 'Admin\AuthorController@status');
// Route::put('admin/author/{author}', 'Admin\AuthorController@update');
// Route::get('admin/author/edit{author}', 'Admin\AuthorController@edit');;
// Route::post('admin/author/', 'Admin\AuthorController@store');
// Route::get('admin/author/create', 'Admin\AuthorController@create');
// Route::get('admin/author/', 'Admin\AuthorController@index');

// Category Routes
// Route::delete('admin/category/{category}', 'Admin\CategoryController@destroy');
// Route::put('admin/category/{category}', 'Admin\CategoryController@status');
// Route::put('admin/category/{category}', 'Admin\CategoryController@update');
// Route::get('admin/category/edit{category}', 'Admin\CategoryController@edit');;
// Route::post('admin/category/', 'Admin\CategoryController@store');
// Route::get('admin/category/create', 'Admin\CategoryController@create');
// Route::get('admin/category/', 'Admin\CategoryController@index');

// Book Routes
// Route::delete('admin/book/{book}', 'Admin\BookController@destroy');
// Route::put('admin/book/{book}', 'Admin\BookController@status');
// Route::put('admin/book/{book}', 'Admin\BookController@update');
// Route::get('admin/book/edit{book}', 'Admin\BookController@edit');;
// Route::post('admin/book/', 'Admin\BookController@store');
// Route::get('admin/book/create', 'Admin\BookController@create');
// Route::get('admin/book/', 'Admin\BookController@index');

// Media Routes
Route::delete('admin/media/{media}', 'Admin\MediaController@destroy');
Route::put('admin/media/{media}', 'Admin\MediaController@status');
Route::put('admin/media/{media}', 'Admin\MediaController@update');
Route::get('admin/media/edit{media}', 'Admin\MediaController@edit');;
Route::post('admin/media/', 'Admin\MediaController@store');
Route::get('admin/media/create', 'Admin\MediaController@create');
Route::get('admin/media/', 'Admin\MediaController@index');

// Team Routes
Route::delete('admin/team/{team}', 'Admin\TeamController@destroy');
Route::put('admin/team/{team}', 'Admin\TeamController@status');
Route::put('admin/team/{team}', 'Admin\TeamController@update');
Route::get('admin/team/edit{team}', 'Admin\TeamController@edit');;
Route::post('admin/team/', 'Admin\TeamController@store');
Route::get('admin/team/create', 'Admin\TeamController@create');
Route::get('admin/team/', 'Admin\TeamController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
