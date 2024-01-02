<?php

use App\Http\Controllers\Authten;
use App\Http\Controllers\Mahasiswa;
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


Route::middleware('auth')->group(function () {
    Route::get('/', [Mahasiswa::class, 'index']);
    Route::get('/delete/{id}', [Mahasiswa::class, 'delete']);
    Route::get('/create', [Mahasiswa::class, 'create']);
    Route::post('/create', [Mahasiswa::class, 'store']);
    Route::post('/update', [Mahasiswa::class, 'update']);
    Route::get('/update/{id}', [Mahasiswa::class, 'updateStore']);
    Route::get('/logout', [Authten::class, 'logout']);
    Route::get('/pdf', [Mahasiswa::class, 'generatePDF']);
   
});



Route::middleware('guest')->group(function () {
    Route::get('/login', [Authten::class, 'login'])->name('login');
    Route::post('/login', [Authten::class, 'loginStore']);
    Route::get('/register', [Authten::class, 'register']);
    Route::post('/register', [Authten::class, 'registerStore']);
});
