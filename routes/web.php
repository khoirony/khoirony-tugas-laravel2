<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Blog;

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

// Halaman Depan Produk
Route::get('/', function () {
    $produk   = Produk::paginate(10);

    return view('welcome', [
        'title' => 'List produk',
        'produk' => $produk,
    ]);
})->name("welcome");

// Hasil Pencarian
Route::post("/", function (Request $request) {
    $cari = ucfirst($request->cari);
    if($request->pilihan == 'produk'){
        $produk = Produk::where('nama_produk','LIKE','%'.$cari.'%')->get();
        return view('welcome', [
            'title' => 'List produk',
            'produk' => $produk,
        ]);
    }else{
        $blog = blog::where('judul','LIKE','%'.$cari.'%')->get();
        return view('blog', [
            'title' => 'List blog',
            'blog' => $blog,
        ]);
    }

})->name("cari");

// Halaman Depan Blog
Route::get('/blogger', function () {
    $blog   = blog::paginate(10);

    return view('blog', [
        'title' => 'List blog',
        'blog' => $blog,
    ]);
})->name("blog");

// Authentication
Route::any("/login", [AuthController::class, "login"])->name("login")->middleware(["noAuth"]);
Route::any("/logout", [AuthController::class, "logout"])->name("logout")->middleware(["withAuth"]);

// CRUD PRODUCT
Route::prefix("produk")->name("produk.")->controller(ProdukController::class)->group(function(){
    Route::get('/', 'index')->name("index")->middleware(["withAuth"]);
    Route::get('/create', 'create')->name("create")->middleware(["withAuth"]);
    Route::get('/detail/{id}', 'show')->name("detail");
    Route::get('/edit/{id}', 'edit')->name("edit")->middleware(["withAuth"]);
    Route::get('/destroy/{id}', 'destroy')->name("destroy")->middleware(["withAuth"]);

    Route::post('/store', 'store')->name("store")->middleware(["withAuth"]);
    Route::post('/update/{id}', 'update')->name("update")->middleware(["withAuth"]);
});

// CRUD BLOG
Route::prefix("blog")->name("blog.")->controller(BlogController::class)->group(function(){
    Route::get('/', 'index')->name("index")->middleware(["withAuth"]);
    Route::get('/create', 'create')->name("create")->middleware(["withAuth"]);
    Route::get('/detail/{id}', 'show')->name("detail");
    Route::get('/edit/{id}', 'edit')->name("edit")->middleware(["withAuth"]);
    Route::get('/destroy/{id}', 'destroy')->name("destroy")->middleware(["withAuth"]);

    Route::post('/store', 'store')->name("store")->middleware(["withAuth"]);
    Route::post('/update/{id}', 'update')->name("update")->middleware(["withAuth"]);
});