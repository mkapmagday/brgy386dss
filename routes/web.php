<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
})->middleware(['auth','role:resident'])->name('request');


Route::get('/status', function () {
    return view('status');
})->middleware(['auth','role:resident'])->name('status');


Route::resource('admin/user', UserController::class)->middleware(['auth','role:admin']);
Route::resource('admin/role', RoleController::class)->middleware(['auth','role:admin']);
Route::post('/user/{user}/role',[UserController::class, 'assignRole'])->name('user.assignRole');
require __DIR__.'/auth.php';
