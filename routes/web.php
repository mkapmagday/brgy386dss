<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/request', function () {
    return view('request');
})->middleware(['auth'])->name('request');


Route::get('/status', function () {
    return view('status');
})->middleware(['auth'])->name('status');


Route::get('/admin', 'Admin\DashboardController@index')->middleware('role:admin');
Route::get('/resident', 'Seller\DashboardController@index')->middleware('role:seller');
require __DIR__.'/auth.php';
