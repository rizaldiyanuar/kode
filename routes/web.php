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
    return view('welcome'); //nama depan dari welcome.blade.php
});

Route::get('aw', function(){
    return 'Hello World';
});

Route::get('user/{nama?}', function($nama="anjing"){
    return 'Hello '.$nama;
});

Route::redirect('/home','/user');

Route::get('/note','noteController@index');
Route::get('/note/{id}','noteController@show');
Route::get('/addnote','noteController@create');
Route::post('/note','noteController@store');
Route::get('/note/edit/{id}','noteController@edit');
Route::put('/note/{id}','noteController@update');
Route::get('/note/delete/{id}','noteController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
