<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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