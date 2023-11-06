<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ServiceOrderController;
use App\Http\Controllers\Auth\GantiPasswordController;

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


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::resource('/ganti-password', GantiPasswordController::class)->middleware('auth');
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/service-order', ServiceOrderController::class)->middleware('auth');
Route::get('/report', [ReportController::class, 'index'])->name('report')->middleware('auth');
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice')->middleware('auth');
Route::get('/invoice/print/{id}', [InvoiceController::class, 'print'])->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
