<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userCOntroller;
use App\Http\Controllers\productController;
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

Route::get('/login', function () {
    return view('login');
});

Route::post("/login",[userCOntroller::class,'login']);

// product routes
Route::get("/", [productController::class,'index']);
Route::get("detail/{id}", [productController::class, 'detail']);
Route::get("search", [productController::class, 'search']);
Route::get("/view_cart", [productController::class, 'view_cart']);
Route::post("add_to_cart", [productController::class, 'addToCart']);


