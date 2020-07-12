<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => 'auth'], function(){
	Route::get('/pertanyaan/create','questionController@create');//tampil form
	Route::post('/pertanyaan/create','questionController@store');//simpen data
	Route::post('pertanyaan', 'answerController@store');//simpen jawaban
});
Route::get('/','questionController@index');
Route::get('/pertanyaan', ['answerController@index','questionController@show']);//tampil pertanyaan, jawaban, dan form menjawab
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
