<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\invoicesController;
use App\Http\Controllers\recordsController;

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
    return view('index');
});

// PRODUCTS----------------------
Route::get('products',[productController::class,'index'])->name('prodIndex');
Route::get('productCreate',[productController::class,'create'])->name('productCreate');
Route::post('productStore',[productController::class,'store'])->name('productStore');
Route::get('productUpdate/{id}',[productController::class,'edit'])->name('productUpdate');
Route::post('productEdit/{id}',[productController::class,'update'])->name('productEdit');
Route::get('productShow/{id}',[productController::class,'show'])->name('productShow');
Route::get('productDelete/{id}',[productController::class,'destroy'])->name('productDelete');
Route::get('amountCreate',[productController::class,'amountCreate'])->name('amountCreate');
Route::post('amountStore',[productController::class,'amountStore'])->name('amountStore');

// CUSTOMERS---------------------
Route::get('customer',[customersController::class,'index'])->name('custIndex');
Route::get('customerCreate',[customersController::class,'create'])->name('customerCreate');
Route::post('customerStore',[customersController::class,'store'])->name('customerStore');
Route::get('customerUpdate/{id}',[customersController::class,'edit'])->name('customerEdit');
Route::post('customertEdit/{id}',[customersController::class,'update'])->name('customerUpdate');
Route::get('customerShow/{id}',[customersController::class,'show'])->name('customerShow');
Route::get('customerDelete/{id}',[customersController::class,'destroy'])->name('customerDelete');

// SALES-------------------------

Route::get('sales',[salesController::class,'index'])->name('sales');
Route::get('salesCreate',[salesController::class,'create'])->name('salesCreate');
Route::post('salesStroe',[salesController::class,'store'])->name('salesStore');
Route::get('salesShow/{id}',[salesController::class,'show'])->name('salesShow');
Route::get('salesDelete/{id}',[salesController::class,'destroy'])->name('salesDelete');

// INVOICES----------------------

route::get('invoices',[invoicesController::class,'index'])->name('invoices');
route::get('invoicesShow/{id}',[invoicesController::class,'show'])->name('invoicesShow');
route::post('invoicesClear/{id}',[invoicesController::class,'clear'])->name('invoicesClear');

// RECORDS
route::get('records',[recordsController::class,'index'])->name('records');


