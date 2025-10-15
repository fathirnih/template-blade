<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;

// 🔹 Route utama (halaman publik)
Route::get('/', [HomeController::class, 'index'])->name('home');

// 🔹 Contoh HTTP Method (latihan)
Route::get('/hello', fn() => 'welcome');
Route::post('/submit', fn() => 'Hello');
Route::put('/update', fn() => 'data berhasil diupdate');
Route::delete('/delete', fn() => 'data berhasil dihapus');

// 🔹 Login dan Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 🔹 Admin area (hanya bisa diakses kalau sudah login sebagai admin)

Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs');
});

Route::middleware(['admin'])->prefix('admin')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', [BlogController::class, 'index'])->name('admin.dashboard');

    Route::resource('blog', BlogController::class)->except(['show']);

    //jika menggunakan prefix 
    // CRUD Blog
 //   Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
   // Route::post('/', [BlogController::class, 'store'])->name('blog.store');
   // Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
   // Route::put('/{id}', [BlogController::class, 'update'])->name('blog.update');
   // Route::delete('/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
  
});
