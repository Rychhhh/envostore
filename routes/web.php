<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;

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

// Tampilan Utama
Route::get('/', function () {
    return view('welcome');
});

// Routes Auth
Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('product');

// Route untuk admin
Route::get('admin', function() { return view('admin.index'); })->middleware('checkRole:admin');

// Route untuk admin dan pembeli
Route::get('pembeli', function() { return view('product.index'); })->middleware('checkRole:pembeli ,admin ');


Route::resource('product', AdminController::class);

Route::resource('user', UserController::class);

// Fitur
Route::get('/search', [HomeController::class, 'search']);

// Cart
Route::get('showcart', [CartController::class, 'showcart']);
Route::post('addcart/{id}', [CartController::class, 'addcart']);
Route::get('cartdelete/{id}', [CartController::class, 'cartdelete']);
// Belum jalan
Route::get('/applyCart/edit/{id}', [CartController::class, 'edit']);
Route::get('/applyCart/update/{id}', [CartController::class, 'update']); // Edit cart

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index']);
