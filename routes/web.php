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
Route::get('home', function () {
    return view('widget.content');
});
Route::get('admin/login','useradController@getlogin');
Route::post('admin/login','useradController@postlogin');

Route::group(['prefix'=>'admin'],function(){
	Route::get('/','useradController@index');
	Route::get('user','useradController@getuser');
});