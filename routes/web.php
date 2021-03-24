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
//     return view('welcome');
// });
Route::get('/',function(){
  return redirect('/pizzas');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// rotte di prova
Route::get('/private','PrivateAController@index')->middleware('auth');
// middleware va nell'area di tutti i middleware disponibili e attiva quello inserito
Route::get('/public','PublicAController@index');
// fine rotte prova
// Route::resource('auto',AutoController::class);

// Route::resource('/pizzas',PizzaController::class);


// rotte esercizio vero e proprio
// mi serve name di queste rotte perche sto sovrascrivendo la resource e io
// nelle viste avevo usato il nome delle rotte che però sovrascrivendo route non esiste piu
// mi darebbe errore
Route::get('pizzas', 'PublicController@index')->name('public.pizzas.index');
Route::get('pizzas/{pizza}', 'PublicController@show')->name('public.pizzas.show');

// Route::resource('auto', AutoController::class)->middleware('auth');
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::resource('pizzas', PizzaController::class);
    });
