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

Route::get('/accueil', function(){
    return view('pages/index');
});
Route::get('signup','EleveController@index');
Route::post('signup','EleveController@store')->name('signup');

route::get('/parametres', function(){
    return view('pages/parametre');
});

