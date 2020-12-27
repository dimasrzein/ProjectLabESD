<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('home');
});

use App\Http\Controllers\ProductController;
Route::get('/product', [ProductController::class, 'index']);
Route::get('/input-product', [ProductController::class, 'input']);
Route::get('/delete-product/{id}', [ProductController::class, 'delete']);
Route::post('/input', [ProductController::class, 'forminput']);
Route::get('/update-product/{id}', [ProductController::class, 'updateproduct']);
Route::post('/update/{id}', [ProductController::class, 'update']);

Route::get('/order', function(){
    return view('order');
});

use App\Http\Controllers\OrderController;
Route::get('/order', [OrderController::class, 'index']);
Route::get('/order-product/{id}', [OrderController::class, 'order']);
Route::post('/orders', [OrderController::class, 'formorder']);

use App\Http\Controllers\HistoryController;
Route::get('/history', [HistoryController::class, 'index']);
Route::get('/testing', [HistoryController::class, 'list']);

