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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','ProductsController@index');
Route::post('/','ProductsController@create')->name('createProduct');

Route::get('/update/{@id}', 'ProductsController@editrouting')->name('editrouting');
 

