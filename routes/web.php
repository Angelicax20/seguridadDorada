<?php

use App\Http\Controllers\HomeController;
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
