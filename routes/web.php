<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

// Profiles
Route::get('/myProfile', 'UserController@showMyProfile')->name('myProfile');
Route::get('/userProfile/{id}', 'UserController@showUserProfile');

//Games
Route::get('/gamesMenu', 'GameController@showGamesMenu')->name('gamesMenu');

// Elements
Route::resource('/elements', 'ElementController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);
