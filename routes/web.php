<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\contohController;
use App\Http\Controllers\FrontEndController;
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

// Route::get('/', 'FrontEndController@index')->name('index');

// Route::get('/contoh', function () {
//     return view('back.aspirasi.indexAspirasi');
// });


Route::get('/', [FrontEndController::class, 'index']);

Route::get('/tentangSaya', [FrontEndController::class, 'tentang'])->name('tentangSaya');

Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');

Route::get('/berita', [FrontEndController::class, 'berita'])->name('berita');

Route::get('/galerii', [FrontEndController::class, 'galerii'])->name('galerii');

Route::get('/aspirasii', [AspirasiController::class, 'aspirasii'])->name('aspirasii');

Route::post('/aspirasi-store', [AspirasiController::class, 'store'])->name('store');

Route::get('/detail-artikel/{judul}', [FrontEndController::class, 'detail'])->name('detail-artikel');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/default', [DashboardController::class, 'dashboard'])->name('dashboard');


    Route::get('/aspirasi-data', [AspirasiController::class, 'show'])->name('show');

    Route::get('/deleteAS/{id}', [AspirasiController::class, 'deleteAS'])->name('deleteAS');

    Route::resource('/kategori', KategoriController::class);

    Route::resource('/artikel', ArtikelController::class);

    Route::resource('/galeri', GaleriController::class);
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');


Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

// Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
