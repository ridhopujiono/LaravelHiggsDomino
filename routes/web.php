<?php

use App\Http\Controllers\HalamanUtamaController;
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

Route::get('/', function () {
    return view('utama.index');
});
Route::get('food_and_drink', [HalamanUtamaController::class, 'food_and_drink']);
Route::get('electronic', [HalamanUtamaController::class, 'electronic']);
Route::get('fashion', [HalamanUtamaController::class, 'fashion']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('produks', App\Http\Controllers\produkController::class);


Route::resource('jenisProduks', App\Http\Controllers\jenis_produkController::class);
