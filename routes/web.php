<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;

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


Route::resource('/', 'HomeContoller');

Route::get('/add-supplier', [SupplierController::class, 'index']);
Route::post('/save-supplier', [SupplierController::class, 'store']);
Route::get('/manage-supplier', [SupplierController::class, 'show']);
Route::post('/edit-supplier', [SupplierController::class, 'edit']);
Route::post('/update-supplier/{supplier_id}', [SupplierController::class, 'update']);
Route::post('/delete-supplier', [SupplierController::class, 'destroy']);


Route::get('/add-brand', [BrandController::class, 'index']);
Route::post('/save-brand', [BrandController::class, 'store']);
Route::get('/manage-brand', [BrandController::class, 'show']);
Route::post('/edit-brand', [BrandController::class, 'edit']);
Route::post('/update-brand/{brand_id}', [BrandController::class, 'update']);
Route::post('/delete-brand', [BrandController::class, 'destroy']);

Route::get('/add-category', [CategoryController::class, 'index']);
Route::post('/save-category', [CategoryController::class, 'store']);
Route::get('/manage-category', [CategoryController::class, 'show']);
Route::post('/edit-category', [CategoryController::class, 'edit']);
Route::post('/update-category/{category_id}', [CategoryController::class, 'update']);
Route::post('/delete-category', [CategoryController::class, 'destroy']);



Route::get('/add-product', [ProductController::class, 'index']);
Route::post('/save-product', [ProductController::class, 'store']);
Route::get('/manage-product', [ProductController::class, 'show']);
Route::post('/edit-product', [ProductController::class, 'edit']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update']);
Route::post('/delete-product', [ProductController::class, 'destroy']);

Route::get('/purchase', [PurchaseController::class, 'index']);
Route::post('/save-purchase', [PurchaseController::class, 'store']);
Route::get('/stoke', [PurchaseController::class, 'show']);


Route::get('/sale', [SaleController::class, 'index']);


Route::post('/sale-add', [SaleController::class, 'add']);
Route::get('/sale-view', [SaleController::class, 'order_show']);
Route::get('/confirm-page', [SaleController::class, 'confirm_page']);
Route::post('/delete-order', [SaleController::class, 'delete']);
Route::post('/confirm-order', [SaleController::class, 'confirm_order']);

Route::get('/report', [SaleController::class, 'report']);
Route::post('/view-iteams', [SaleController::class, 'view_iteams']);




