<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('home');

//http method 

Route::get('/hello', function () {
    return 'welcome';
});


Route::post('/submit', function (){
    return 'Hello';
});

Route::put('/update', function(){
    return 'data berhasil di update';
});

Route::delete('/delete', function(){
    return 'data berhasil di update';
});

//grub prefix


// 🔹 ROUTE GROUP PREFIX
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
});

//auth 

Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs');
});


use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
