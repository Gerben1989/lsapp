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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

// Route::get('/hello', function () {
//     return "<h1>Hello world</h1>";
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'Dit is de gebruiker '.$name.' met de id: '.$id;
// });
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
