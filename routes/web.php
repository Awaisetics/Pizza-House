<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pizzaController;

/*kjh


Route::get('/', function ()
{
    return view('welcome');
});*/

Route::get('/index',  [pizzaController::class, 'index']);
Route::get('/index/create',  [pizzaController::class, 'create']);
Route::post('/index',  [pizzaController::class, 'store']);
Route::get('/show/{id}',  [pizzaController::class, 'show']);
Route::delete('/show/{id}',  [pizzaController::class, 'destroy']);
