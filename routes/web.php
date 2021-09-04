<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
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
Route::redirect('/','companies');
Route::get('companies',[CompanyController::class,'index'])->name('companies.index');
Route::get('products',[ProductController::class,'index'])->name('products.index');
Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::get('products/{id}',[ProductController::class,'show'])->name('products.show');
Route::post('products',[ProductController::class,'store'])->name('products.store');
Route::delete('products/{id}',[ProductController::class,'destroy'])->name('products.destroy');
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::put('products/{id}',[ProductController::class,'update'])->name('products.update');
Route::get('companies/create',[CompanyController::class,'create'])->name('companies.create');
Route::get('companies/{id}',[CompanyController::class,'show'])->name('companies.show');
Route::post('companies',[CompanyController::class,'store'])->name('companies.store');
Route::get('companies/edit/{id}',[CompanyController::class,'edit'])->name('companies.edit');
Route::put('companies/{id}',[CompanyController::class,'update'])->name('companies.update');
