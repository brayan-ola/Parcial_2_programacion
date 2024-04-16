<?php

use Illuminate\Support\Facades\Route;

Route::get('/hospital', function () {
    return view('hospital');
})->name('hospital');
