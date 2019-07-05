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
Route::get('/create', 'HomeController@create');
Route::get('/manage', 'HomeController@manage');
Route::get('/appointment', 'HomeController@appointment');
Route::post('/newP', 'HomeController@newP')->name('newP');
//Route::get('/edit/{id}', 'HomeController@edit');
Route::get('/delete-p/{id}', 'HomeController@deletep');
Route::get('/delete-a/{id}', 'HomeController@deletea');


Route::get('/book', 'guestcontroller@book');
Route::post('/bookApp', 'guestcontroller@bookApp')->name('bookApp');