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
    return view('home');
});

Route::get('/home', 'HomeController@index');
Route::get('/middle/{age}', [function ($age) {
    return "Niste punoletni";},'middleware'=>'checkAge']);
Route::get('/login', 'Auth\LoginController@create');
Route::post('/login','Auth\LoginController@login');
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
