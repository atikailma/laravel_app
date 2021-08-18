<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembelianController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard.admin');

require __DIR__.'/auth.php';

Route::resource('user', UserController::class);
//product
Route::resource('product', ProductController::class);
Route::get('/product/deleted/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

//order
Route::resource('order', OrderController::class);
Route::get('/order/store/{id}', [OrderController::class, 'storeprod'])->name('product.storeprod');
Route::get('/order/cetak/{id}', [OrderController::class, 'printSlip'])->name('order.cetak');

//pembelian
Route::resource('pembelian', PembelianController::class);
Route::get('/pembelian/cetak/{id}', [PembelianController::class, 'printSlip'])->name('pembelian.cetak');
