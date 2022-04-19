<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopeeController;
use App\Models\sektor;
use App\Models\karyawan;
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
//GROUP
Route::group(['prefix' => 'sektor', 'as' => 'sektor.'], function () {
    Route::get('/', [ShopeeController::class, 'index'])->name('home');
});
//GET
Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/list-data-shopee', function () {
    return view('list-data-shopee');
});
Route::get('/create-data-shopee', function () {
    return view('create-data-shopee');
});
Route::get('/', [ShopeeController::class, 'index'])->name('home');
Route::get('/buat', [ShopeeController::class, 'create'])->name('sektor.tambah-data');
Route::get('/detail/{id}', [ShopeeController::class, 'show'])->name('sektor.show');
Route::get('/edit/{id}', [ShopeeController::class, 'edit'])->name('sektor.edit');
//POST
Route::post('/update/{id}', [ShopeeController::class, 'update'])->name('sektor.update');
Route::post('/buat-data', [ShopeeController::class, 'store'])->name('sektor.buat-data');
//DELETE
Route::delete('/delete/{id}', [ShopeeController::class, 'destroy'])->name('sektor.destroy');

