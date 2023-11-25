<?php

use App\Http\Controllers\ApplicationController;
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
    return view('ejercicios.progra.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('excprog_index', [ApplicationController::class, 'ExcProg_index'])->name('excprog.index');

Route::get('learnprog_index', [ApplicationController::class, 'LearnProg_index']);

Route::get('exc/{id}', [ApplicationController::class, 'get_data_content']);