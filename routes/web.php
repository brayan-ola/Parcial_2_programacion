<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hospital', function () {
    return view('hospital');
})->name('hospital');
