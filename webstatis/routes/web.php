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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'HomeController@home');

Route::get('/cast', 'CastController@index');
Route::post('/cast', 'CastController@store');
Route::get('/cast/create', 'CastController@create');
Route::get('/cast/{cast_id}', 'CastController@show');
Route::get('/cast/{cast_id}/edit', 'CastController@edit');
Route::put('/cast/{cast_id}', 'CastController@update');
Route::delete('/cast/{cast_id}', 'CastController@destroy');


Route::get('/form', 'AuthController@form');

Route::get('/welcome', 'AuthController@welcome');

Route::get('/master', function(){
    return view('adminlte/master');
});
Route::get('/table', function(){
    return view('adminlte/item/table');
});
Route::get('/data-table', function(){
    return view('adminlte/item/datatable');
});

// Route::get('/welcome', function(){
//     return view('welcome');
// });