<?php
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index'])->name('home');

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
