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

// for multi language
Route::get('/lang/{param}', function($param){
	App::setLocale($param);
	session()->put('locale', $param);
	return redirect('/');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('{path}', function () {
    return view('welcome');
})->where('path','.*');

