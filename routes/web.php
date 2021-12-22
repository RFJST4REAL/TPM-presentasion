<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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

Route::get('/about', function () {
    return view('about',[
        'title' => 'About Us'
    ]);
});

Route::get('/checkout', function () {
    return view('checkout',[
        'title' => 'Checkout'
    ]);
});


//logincontroller
Route::get('/Login', [LoginController::class, 'index']);

//register controller
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

/////////////////////////////////////////////////////////////////////
//controller product
Route::get('/', [ProductController::class, 'index']);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

//addproduct
Route::get('/addproduct', [ProductController::class, 'addbarangview'])->name('addbarangview');
Route::post('/addproduct', [ProductController::class, 'addbarang'])->name('addproduct');

//delete Product
Route::get('/deleteproduct', [ProductController::class, 'delete'])->name('delete');
Route::delete('/deleteproduct', [ProductController::class, 'delete'])->name('delete');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
