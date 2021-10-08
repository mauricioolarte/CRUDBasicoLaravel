<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::resource('/productos', ProductosController::class);

/*
Route::get('/inicio', 'App\Http\Controllers\ProductosController@index');
Route::get('/create', 'App\Http\Controllers\ProductosController@create');
*/
