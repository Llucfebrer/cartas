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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cartas', 'FrontendController@index')->name('cartas');

Route::get('/producto', 'FrontendController@producto');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/test', function () {
    $restaurante = App\Restaurante::findOrFail(2)->cartas;

    $carta = App\Carta::findOrFail(82);
    $producto = $carta->productos->first();
    dump($producto);
    dump($producto->alergicos);

});
