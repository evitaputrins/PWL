<?php


//Route::get('/', function(){
//    return view('home');
//});

// Route::get('/hello', 'WelcomeController@hello');
Route::get('/', 'HomeController@index');
Route::get('/tampil', 'HomeController1@index'); 

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/services', 'ServicesController@index');

Route::get('/contact', 'ContactController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ArticleController@manage')->name('manage');
Route::get('/manage/add','ArticleController@add');
Route::post('/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');

Route::get('/manageuser', 'UserController@manageuser')->name('manageuser');
Route::get('/manageuser/add','UserController@add');
Route::post('/create','UserController@create');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update/{id}','UserController@update');
Route::get('/user/delete/{id}','UserController@delete');