<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productController;
use App\Http\Controllers\portofolioController;
use App\Http\Controllers\mainhomeController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\testimonyController;
use App\Http\Controllers\categoryController;

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
Route::get('/productfurniture',[productController::class,"index_main"]);
Route::get('/portofoliofurniture',[portofolioController::class,"index_main"]);
Route::get('/datacenter',[loginController::class,"index"]);

Route::get('/dashboard_admin',[dashboardController::class,"index"]);
Route::get('/category_admin',[categoryController::class,"index"]);
Route::get('/product_admin',[productController::class,"index"]);
Route::get('/testimony_admin',[testimonyController::class,"index"]);
Route::get('/bestsellerproduct_admin',[productController::class,"index_best_seller_admin"]);
Route::get('/portofolio_admin',[portofolioController::class,"index"]);
Route::get('/mainhome_admin',[mainhomeController::class,"index"]);

Route::post('/upload_portofolio', [portofolioController::class,"upload_new_portofolio"])->name("upload_porto");
Route::post('/upload_products', [productController::class,"upload_new_product"])->name("upload_product");
Route::post('/upload_testimony', [testimonyController::class,"upload_new_testimony"])->name("upload_testimony");
Route::post('/upload_category', [categoryController::class,"upload_category"])->name("upload_category");

Route::post('/update_bg_utamas', [mainhomeController::class,"update_background_utama"])->name("update_bg_utama");
Route::post('/update_bg_aboutus', [mainhomeController::class,"update_background_aboutus"])->name("update_bg_aboutus");
Route::post('/update_bg_tagline', [mainhomeController::class,"update_background_tagline"])->name("update_bg_tagline");
Route::post('/update_summary', [mainhomeController::class,"update_summary"])->name("update_summarys");

Route::post('/update_best_sellers', [productController::class,"update_best_sellers"])->name("update_best_seller");
Route::post('/delete_products', [productController::class,"delete_products"])->name("delete_product");
Route::post('/delete_porto', [portofolioController::class,"delete_portos"])->name("delete_porto");
Route::post('/delete_testimonys', [testimonyController::class,"delete_testimonys"])->name("delete_testimony");
Route::post('/delete_category', [categoryController::class,"delete_category"])->name("delete_category");

Route::get('/pagination/fetch_data_index',  [productController::class,"fetch_data"]);

Route::get('/get_table_testimony', [testimonyController::class,"see_table_all_testimony"])->name("getalltestimony");
Route::get('/get_table_category', [categoryController::class,"see_table_all_category"])->name("getallcategory");


Route::get('/get_table_portofolio', [portofolioController::class,"see_table_all_porto"])->name("getallportofolio");
Route::get('/get_table_product',[productController::class,"see_table_all_product"])->name("getallproduct");

Route::post("/logincheck" ,[loginController::class,"login_checks"])->name("login_check");