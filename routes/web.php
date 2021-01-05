<?php

use Illuminate\Support\Facades\Route;
use App\Models\Model\Cliente;

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
use App\Http\Controllers\ClienteController;

Route::get('/', 'App\Http\Controllers\ClienteController@index');
Route::get('/cadastro/create', 'App\Http\Controllers\ClienteController@create');
Route::post('/cadastro', 'App\Http\Controllers\ClienteController@store');
Route::get('/cadastro/alert', 'App\Http\Controllers\ClienteController@alert');
Route::post('/cadastro/update/{id_cliente}', 'App\Http\Controllers\ClienteController@update');
Route::get('/cadastro/edit/{id_cliente}', 'App\Http\Controllers\ClienteController@edit');




