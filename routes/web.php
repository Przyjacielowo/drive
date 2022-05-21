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
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/catalog/{id}', [App\Http\Controllers\CatalogController::class, 'show'])->name('catalog.show');
    Route::get('/catalog/create}', [App\Http\Controllers\CatalogController::class, 'create'])->name('catalog.create');
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');

Auth::routes([
  'register' => false,
  'reset' => false, 
  'verify' => false, 
]);

