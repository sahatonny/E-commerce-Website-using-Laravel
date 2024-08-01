<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\GuestController;


Route::get('/', function () { return view('welcome'); });
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('profile', ProfileController::class);
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'create'])->name('profile.create');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('category', CategoryController::class);
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::patch('/category', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('admin.category.show');


});



Route::resource('cart', CartController::class);
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/cart', [CartController::class, 'index'])->name('admin.cart.index');
    Route::get('/cart', [CartController::class, 'edit'])->name('admin.cart.edit');
    Route::get('/cart/create', [CartController::class, 'create'])->name('admin.cart.create');
    Route::get('/cart', [CartController::class, 'store'])->name('admin.cart.store');
    Route::patch('/cart/update', [CartController::class, 'update'])->name('admin.cart.update');
    Route::delete('/cart/remove', [CartController::class, 'remove'])->name('admin.cart.remove');



});


Route::middleware('auth')->group(function () {

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart', [CartController::class, 'edit'])->name('cart.edit');
    Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');
    Route::get('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::patch('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');



});


Route::resource('product', ProductController::class);
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('admin.products.show');
});

Route::resource('product', ProductController::class);
Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
});


// Forgot Password Routes
Route::get('/forget-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forget-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset Password Routes
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


Auth::routes([
    'verify' => true,
    'reset' => true]);

    Route::middleware('auth')->group(function () {
        Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
        Route::get('/user/settings', [UserController::class, 'settings'])->name('user.settings');
    });
    Route::middleware('user')->group(function () {
        Route::get('/login', [GuestController::class, 'showLoginForm'])->name('login');
        Route::get('/register', [GuestController::class, 'showRegistrationForm'])->name('register');
    });





require __DIR__.'/auth.php';
require __DIR__.'/admin.auth.php';

Auth::routes();
