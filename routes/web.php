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

// Route::get('/private','PrivateController@index')->middleware('auth');
// middleware va nell'area di tutti i middleware disponibili e attiva quello inserito
// Route::get('/public','PublicController@index');

// Route::resource('auto',AutoController::class);

// Route::resource('/pizzas',PizzaController::class);

Route::get('pizzas', 'PublicController@index')->name('public.pizzas.index');
Route::get('pizzas/{pizza}', 'PublicController@show')->name('public.pizzas.show');

// Route::resource('auto', AutoController::class)->middleware('auth');
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::resource('pizzas', PizzaController::class);
    });
