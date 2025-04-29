<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Sales\SalesInvoiceController;
//default route
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});


//CRUD route
Route::get('/products/{id}/confirm',[ProductController::class,'confirm']);
Route::resource('products', ProductController::class);


//Invoice Route
Route::get("/sales/invoices",[SalesInvoiceController::class,'index']);


// Route::get('/pages.home',[HomeController::class,'index']);