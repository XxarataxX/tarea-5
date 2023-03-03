<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/product', 'ProductoController@index')->name('blade.php');
Route::get('/product/editar', 'ProductoController@edit')->name('blade(1).php');
Route::get('/product/crear', 'ProductoController@create')->name('blade(2).php');

Route::get('/', function () {
    return view('welcome');
});

public function index()
{
    return view('blade.php');
}
public function edit()
{
    return view('blade(1).php');
}

public function create()
{
    return view('blade(2).php');
}
