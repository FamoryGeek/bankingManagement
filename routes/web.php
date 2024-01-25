<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    return view('dashboard');
});
//Auth routes

//client routes
Route::controller(ClientController::class)->name('client.')->group(function () {
    Route::get('/clients','index')->name('index');
    Route::get('/clients/create','create')->name('create');
    Route::post('/clients/store','store')->name('store');
    Route::get('/clients/edit/{id}','edit')->name('edit');
    Route::post('/clients/update/{id}','update')->name('update');
    Route::get('/clients/destroy/{id}','destroy')->name('destroy');
});
//compte routes
Route::controller(ClientController::class)->name('compte.')->group(function () {
    Route::get('/comptes','index')->name('index');
    Route::get('/comptes/create','create')->name('create');
    Route::post('/comptes/store','store')->name('store');
    Route::get('/comptes/edit/{id}','edit')->name('edit');
    Route::post('/comptes/update/{id}','update')->name('update');
    Route::get('/comptes/destroy/{id}','destroy')->name('destroy');
});
//operation routes
Route::controller(ClientController::class)->name('operation.')->group(function () {
    Route::get('/operations','index')->name('index');
    Route::get('/operations/create','create')->name('create');
    Route::post('/operations/store','store')->name('store');
    Route::get('/operations/edit/{id}','edit')->name('edit');
    Route::post('/operations/update/{id}','update')->name('update');
    Route::get('/clients/destroy/{id}','destroy')->name('destroy');
});
