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


Route::get('/designar', 'DesignationController@create');
//Route::post('/designar', 'DesignationController@store');
//
//Route::get('/designar/analise', 'DesignationController@analyze');
//
//Route::get('/desligar', 'ResignationController@destroy');
//Route::get('/desligar/analise', 'ResignationController@analyze');
