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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

// Pizza
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/order', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

// Auth
if(count(User::all()) > 0){
    Auth::routes([
        'register' => false
    ]);
}else{
    Auth::routes();
}
Route::get('/home', 'HomeController@index')->name('home');
