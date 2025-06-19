<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KategoriController;

use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/chat', [ChatController::class, 'index']);

// --- KUMPULAN ROUTE MAHASISWA (URUTAN SUDAH BENAR) ---

// Route untuk menampilkan daftar semua mahasiswa (halaman index)
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route spesifik harus di atas route dinamis
Route::get('/mahasiswa/read', [MahasiswaController::class, 'read']);

// Route untuk menampilkan form edit (lebih spesifik dari view)
Route::get('/mahasiswa/edit/{NRP}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

// Route untuk menampilkan halaman detail 1 mahasiswa
Route::get('/mahasiswa/view/{NRP}', [MahasiswaController::class, 'view'])->name('mahasiswa.view');

// Route untuk memproses update
Route::put('/mahasiswa/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');



// Route untuk menampilkan halaman form combo box
Route::get('/combo', [KategoriController::class, 'showComboForm']);

// Route untuk menampilkan halaman hasil setelah form di-submit
// Kita gunakan GET agar sesuai dengan contoh di soal
Route::get('/hasilcombo', [KategoriController::class, 'handleComboResult']);

