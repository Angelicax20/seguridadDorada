<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SimuladorController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/guiaCompra', [HomeController::class, 'guiaCompra'])->name('guia.compra');
Route::get('/mercadoLibre', [HomeController::class, 'mercadoLibre'])->name('mercado.libre');
Route::get('/manualMercado', [HomeController::class, 'manualMercado'])->name('manual.mercado');

Route::prefix('simulador')->group(function () {
    Route::get('/', [SimuladorController::class, 'index'])->name('shop.view');
    Route::post('/pay/{id}', [SimuladorController::class, 'pay'])->name('shop.pay');
    Route::get('/result', [SimuladorController::class, 'result'])->name('shop.result');
    Route::get('/addressView/{price?}', [SimuladorController::class, 'addressView'])->name('shop.addressView');
    Route::post('/address', [SimuladorController::class, 'address'])->name('shop.address');
    Route::post('/shopCard', [SimuladorController::class, 'shopCard'])->name('shop.card');
    Route::get('/cardView/{price}', [SimuladorController::class, 'cardView'])->name('shop.cardView');
    Route::post('/card', [SimuladorController::class, 'card'])->name('save.card');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/userDetail/{id}', [AdminController::class, 'userDetail'])->name('admin.userDetail');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::post('/products/save', [AdminController::class, 'saveProduct'])->name('admin.saveProduct');
    Route::get('/products/edit/{id}', [AdminController::class, 'editProduct'])->name('admin.products.edit');
    Route::post('/products/update/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
});


Route::get('/', function () {
    return redirect('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/home#slide02');
    })->name('dashboard');
});
