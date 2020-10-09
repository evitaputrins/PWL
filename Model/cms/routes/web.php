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

/*Tugas2*/
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', function() {
// 	return 'Selamat Datang';
// });
// Route::get('/about', function() {
// 	return 'Nama : Evita Putri Nauli <br> Nim : 1931710144';
// });
// Route::get('/articles/{id}', function($id) {
// 	return 'Halaman artikel dengan id '.$id;
// });
// Route::get('/', 'PageController@home');
// Route::get('/about', 'PageController@about');
// Route::get('/articles/{id}', 'PageController@articles');
// Route::get('/hello', function(){
// 	return view ('blog.hello', ['name' => 'Evita']);
// });
// Route::get('/hello', 'PageController@hello');
// Auth::routes();

/*Tugas3*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function() {
	return view('about');
});
Auth::routes();
Route::get('/__invoke', 'homeController@__invoke')->name('home');

Route::get('/article/{id}', 'ArticleController@article');
Route::get('/master', 'MasterController@master')->name('master');
