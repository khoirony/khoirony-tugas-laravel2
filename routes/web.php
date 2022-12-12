<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\ProdukController;


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
})->name("welcome");

// CRUD PRODUCT
Route::prefix("produk")->name("produk.")->controller(ProdukController::class)->group(function(){
    Route::get('/', 'index')->name("index");
    Route::get('/create', 'create')->name("create");
    Route::get('/detail/{id}', 'show')->name("detail");
    Route::get('/edit/{id}', 'edit')->name("edit");
    Route::get('/destroy/{id}', 'destroy')->name("destroy");

    Route::post('/store', 'store')->name("store");
    Route::post('/update/{id}', 'update')->name("update");
});

// Tugas Laravel 2

// CRUD Kategori Blog
Route::prefix("blog")->name("blog.")->controller(BlogController::class)->group(function(){
    Route::get('/', 'index')->name("index");
    Route::get('/create', 'create')->name("create");
    Route::get('/detail/{id}', 'show')->name("detail");
    Route::get('/edit/{id}', 'edit')->name("edit");
    Route::get('/destroy/{id}', 'destroy')->name("destroy");

    Route::post('/store', 'store')->name("store");
    Route::post('/update/{id}', 'update')->name("update");
});