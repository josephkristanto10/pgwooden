<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productController;
use App\Http\Controllers\portofolioController;
use App\Http\Controllers\mainhomeController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;

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


Route::get('/admins', function () {
    return view('admin.pages.signin');
});

Route::get('/',[homeController::class,"index"]);
Route::get('/datacenter',[loginController::class,"index"]);
Route::get('/dashboard_admin',[dashboardController::class,"index"]);
Route::get('/product_admin',[productController::class,"index"]);
Route::get('/portofolio_admin',[portofolioController::class,"index"]);
Route::get('/mainhome_admin',[mainhomeController::class,"index"]);

Route::post('/upload_portofolio', [portofolioController::class,"upload_new_portofolio"])->name("upload_porto");
Route::post('/upload_products', [productController::class,"upload_new_product"])->name("upload_product");


Route::get('/get_table_portofolio', [portofolioController::class,"see_table_all_porto"])->name("getallportofolio");
Route::get('/get_table_product',[productController::class,"see_table_all_product"])->name("getallproduct");