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

// Pizza
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
