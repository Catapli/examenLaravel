<?php

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
Route::resource('products', GangaController::class)->only('update', 'edit','create','store')->middleware(['auth','admin']);
Route::resource('products', GangaController::class)->except('update', 'edit','create','store');
Route::get('/', [\App\Http\Controllers\LandingPage::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/contacto', function (){
    return view('contacto');
});

Route::get('/ganga', [\App\Http\Controllers\GangaController::class, 'index'])->name('products.index');
Route::get('/delete/{id}', [\App\Http\Controllers\GangaController::class,'destroy'])->name('products.delete')->middleware(['auth','admin']);
Route::get('/show/{id}', [\App\Http\Controllers\GangaController::class, 'show'])->name('products.show');

