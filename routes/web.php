<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentListController;
use App\Http\Controllers\DocumentRequestController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Models\DocumentRequest;
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

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/documentreq', function (){
    return view('admin/user/documentrequest');
})->middleware(['auth']);

Route::get('/test', function(){
    return view('test');
});

Route::get('/sms',[SmsController::class,'index']);

Route::get('/request',[DocumentRequestController::class,'index'])->middleware(['auth','role:resident'])->name('request.index');
Route::post('/request/create',[DocumentRequestController::class,'store'])->middleware(['auth','role:resident|admin'])->name('documentrequest.store');
Route::get('/status',[DocumentRequestController::class,'show'])->middleware(['auth','role:resident'])->name('status');


Route::get('/admin/request/',[DocumentRequestController::class,'showReq'])->middleware(['auth','role:admin'])->name('documentrequest.showReq');
Route::get('/admin/status/',[DocumentRequestController::class,'showStatus'])->middleware(['auth','role:admin'])->name('documentrequest.showStatus');

Route::get('/status/edit/{id}',[DocumentRequestController::class,'edit'])->middleware(['auth','role:admin'])->name('documentrequest.edit');
Route::get('/status/update/{id}',[DocumentRequestController::class,'update'])->middleware(['auth','role:admin'])->name('documentrequest.update');
Route::delete('/status/delete/{id}',[DocumentRequestController::class,'destroy'])->middleware(['auth','role:admin'])->name('documentrequest.destroy');
Route::get('/show/{id}',[StatusController::class,'show'])->middleware(['auth','role:admin'])->name('status.show');


Route::get('generatePDF/{id}',[PDFController::class, 'generatePDF'])->middleware(['auth','role:admin'])->name('pdf.generatePDF');
Route::get('generatePDF/show/{id}',[PDFController::class, 'show'])->middleware(['auth','role:admin|resident'])->name('pdf.show');

Route::get('/documentlist',[DocumentListController::class,'index']);
Route::get('/documentlist/edit/{id}',[DocumentListController::class,'edit'])->name('documentlist.edit');
Route::get('/documentlist/update/{id}',[DocumentListController::class,'update'])->name('documentlist.update');
Route::post('/documentlist/create',[DocumentListController::class,'store'])->name('documentlist.store');
Route::delete('/documentlist/delete/{id}',[DocumentListController::class,'destroy'])->name('documentlist.destroy');
Route::resource('admin/user', UserController::class)->middleware(['auth','role:admin']);
Route::resource('admin/role', RoleController::class)->middleware(['auth','role:admin']);
Route::post('/user/{user}/role',[UserController::class, 'assignRole'])->name('user.assignRole');
Route::delete('/user/{user}/role/{role}',[UserController::class,'removeRole'])->name('user.removeRole');
require __DIR__.'/auth.php';
