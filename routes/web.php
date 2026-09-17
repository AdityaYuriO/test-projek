<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\registrasiController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth
Route::get('login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login'])->name('login.masuk');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

//halaman utama
Route::get('/', [berandaController::class, 'index']);

//halaman admin
Route::get('/halaman/admin', [adminController::class, 'index'])->name('dashboard.admin');
Route::get('/halaman/user', [adminController::class, 'user'])->name('user.admin');
Route::post('/tambah/user', [registrasiController::class, 'store'])->name('tambah.user');
Route::delete('/hapus/user/{id}', [adminController::class, 'destroy'])->name('hapus.user');
Route::put('/edit/user/{id}', [adminController::class, 'editUser'])->name('edit.user');
