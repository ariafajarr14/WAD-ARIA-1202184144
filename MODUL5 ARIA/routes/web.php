<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\OrderController;
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
    return view('home');
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/addproduct', [ProductController::class, 'add']);
Route::post('/addproduct', [ProductController::class, 'adds']);
Route::get('/updateproduct/{id}', [ProductController::class, 'update']);
Route::put('/updateproducts/{id}', [ProductController::class, 'updates']);
Route::get('/deleteproduct/{id}', [ProductController::class, 'delete']);
Route::get('/orderdetail/{id}', [OrderController::class, 'detail']);
Route::post('/addorder/{id}', [OrderController::class, 'addorder']);
Route::get('/history', [OrderController::class, 'history']);
Route::get('/order', [OrderController::class, 'index']);
