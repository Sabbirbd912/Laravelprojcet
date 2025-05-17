<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Sales\SalesInvoiceController;
use App\Http\Controllers\TableController;
//default route
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});


//CRUD route
Route::resource('products', ProductController::class);
Route::get('/products/{id}/confirm',[ProductController::class,'confirm']);

Route::resource('tables', TableController::class);
Route::get('/tables/{id}/confirm',[TableController::class,'confirm']);


//Invoice Route
Route::get("/sales/invoices",[SalesInvoiceController::class,'index']);


// Route::get('/pages.home',[HomeController::class,'index']);

// Optional: Quick DB connection check
Route::get('/db-check', function () {
    try {
        \DB::connection()->getPdo();
        return "✅ Database connected: " . \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "❌ Could not connect: " . $e->getMessage();
    }
});
