<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
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
// Customer Routes
Route::get('/',[CustomerController::class,'index'])->name('customer.index');
Route::post('createcustomer',[CustomerController::class,'createCustomer'])->name('customer.create');

// Sale Routes
Route::get('/sales',[SalesController::class,'index'])->name('sales.index');
Route::post('createsales',[SalesController::class,'createSale'])->name('sales.create');

