<?php


//Route::get('/', function(){
//    return view('home');
//});

// Route::get('/hello', 'WelcomeController@hello');
Route::get('/', 'HomeController@index');
Route::get('/home1', 'HomeController1@index'); 

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/services', 'ServicesController@index');

Route::get('/contact', 'ContactController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
