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
//    return view('home');
    return view('login');
});

// Designation Routes
Route::get('/designar', 'DesignationController@create');
//Route::post('/designar', 'DesignationController@store');
//
//Route::get('/designar/analise', 'DesignationController@analyze');


// Resignation Routes
Route::get('/desligar', 'ResignationController@edit');
//Route::delete('/desligar', 'ResignationController@update'');
//Route::get('/desligar/analise', 'ResignationController@analyze');


// Retification Routes
Route::get('/retificar', 'RetificationController@edit');
//Route::post('/retificar', 'DesignationController@update');
//
//Route::get('/retificar/analise', 'DesignationController@analyze');

// Reports Routes
Route::get('/relatorio', 'ReportsController@index');
