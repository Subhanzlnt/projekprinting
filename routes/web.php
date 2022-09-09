<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::prefix('Menu')->group(function () {
//     Route::get('/', [MenuController::class, 'index']);
//     Route::get('/{doa}', [DoaDanKabarBaikController::class, 'show']);
// });

//Home
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu/flashsale', [MenuController::class, 'flashsale'])->name('flashsale');
Route::get('/menu/{id}', [MenuController::class, 'show'])->name('show.menu');
Route::get('/menu/{id}/checkout', [MenuController::class, 'checkout'])->name('checkout.menu');
Route::get('/menu/{id}/checkout/payment', [MenuController::class, 'payment'])->name('payment.menu');

//Voucer
Route::get('/voucher', [VoucherController::class,'index']);
Route::get('/voucher/detail', [VoucherController::class,'detail'])->name('detail.voucher');

//Lokasi
Route::get('/store',[StoreController::class,'index']);
Route::get('/store/detail',[StoreController::class,'detail'])->name('store.detail');

//Profile
route::get('/profile', [App\Http\Controllers\Member\ProfileController::class,'index']);

//Member Login
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'login']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/register',[RegisterController::class, 'index'])->name('register');
route::post('/register',[RegisterController::class, 'store']);

//administrator
Route::resource('/administrator/category', App\http\Controllers\Admin\CategoryController::class)->except('show')->middleware('admin');;
Route::resource('/administrator/product', App\http\Controllers\Admin\ProductController::class)->except('show')->middleware('admin');;
Route::resource('/administrator/topping', App\http\Controllers\Admin\ToppingController::class)->except('show')->middleware('admin');;
Route::resource('/administrator/member', App\http\Controllers\Admin\MemberController::class)->except('show')->middleware('admin');;
Route::resource('/administrator/voucer', App\http\Controllers\Admin\VoucerController::class)->except('show')->middleware('admin');;
Route::resource('/administrator/main', App\http\Controllers\Admin\AdministratorController::class)->except('show')->middleware('admin');;
