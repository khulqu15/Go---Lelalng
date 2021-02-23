<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('products', [PageController::class, 'products'])->name('products');
Route::get('product/{id}', [PageController::class, 'product'])->name('product');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('login', [PageController::class, 'login'])->name('login');
Route::get('register', [PageController::class, 'register'])->name('register');
Route::post('contact', [UserController::class, 'contactUs'])->name('contact.us');
Route::post('register', [UserController::class, 'register'])->name('register.post');
Route::post('login', [UserController::class, 'login'])->name('login.post');

Route::get('profile', [PageController::class, 'profile'])->name('profile');

Route::group(['middleware' => ['userDashboard']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('dashboard/product', [DashboardController::class, 'product'])->name('dashboard.product');
    Route::get('dashboard/user', [DashboardController::class, 'user'])->name('dashboard.user');
    Route::get('dashboard/auction', [DashboardController::class, 'auction'])->name('dashboard.auction');
});
