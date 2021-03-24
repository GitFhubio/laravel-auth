<?php

use Illuminate\Support\Facades\Auth;
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
// la /home l'ho cambiata in /pizzas in routeserviceprovider
// rotte di prova
Route::get('/private','PrivateAController@index')->middleware('auth');
// middleware va nell'area di tutti i middleware disponibili e attiva quello inserito
Route::get('/public','PublicAController@index');
// fine rotte prova
// Route::resource('auto',AutoController::class);

// Route::resource('/pizzas',PizzaController::class);

// rotte esercizio vero e proprio
// mi serve name di queste rotte e diverso(altrimenti proverebbe ad andare in admin) perche sto sovrascrivendo la resource e io
// nelle viste avevo usato il nome delle rotte che però sovrascrivendo resource non esiste piu
// mi darebbe errore
Route::get('pizzas', 'PublicController@index')->name('public.pizzas.index');
Route::get('pizzas/{pizza}', 'PublicController@show')->name('public.pizzas.show');
// se non ricordo vedo da php artisan route list show e index
// Route::resource('auto', AutoController::class)->middleware('auth');
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::resource('pizzas', PizzaController::class);
    });

    // per il controller delle rotte overridate faccio modifica in admin --resource controller
    // per fare la redirect direttamente alle rotte che ho reso pubbliche
