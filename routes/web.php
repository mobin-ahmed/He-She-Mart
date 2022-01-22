<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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

// back-end(admin)................

Route::get('/admin', [adminController::class,'index']);
Route::post('/sign-in', [adminController::class,'signIn']);
Route::get('/manage-product', [productController::class,'manageProduct']);


