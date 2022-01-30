<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userHomePage;
use App\Http\Controllers\ProductsController;

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
Route::get('/sign-up', [adminController::class,'signUp']);
Route::post('/register', [adminController::class,'register']);
Route::get('/dashboard', [adminController::class,'dashboard']);
Route::get('/add-product-page', [productController::class,'addProductPage']);
Route::post('add-product', [productController::class,'addProduct']);
Route::get('delete-product/{id}', [productController::class,'deleteProduct']);
Route::get('/update-product-page/{id}', [productController::class,'updateProductPage']);
Route::post('/update-product/{id}', [productController::class,'updateProduct']);


// front-end(userinterface)..................

Route::get('/', [userHomePage::class, 'index']);
Route::get('/home', [userHomePage::class, 'index']);
Route::get('/login-register-page', [userHomePage::class, 'loginRegisterPage']);
Route::get('/contact-page', [userHomePage::class, 'contactPage']);
Route::get('/cart-page', [userHomePage::class, 'cartPage']);
Route::get('/checkout-page', [userHomePage::class, 'checkoutPage']);
Route::get('/product-details-page', [ProductsController::class, 'productDetailsPage']);
Route::get('/payment-page', [userHomePage::class, 'paymentPage']);