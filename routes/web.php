<?php

use Illuminate\Support\Facades\Route;


Route::get('/cv', function () {
    // Mengembalikan view utama cv.blade.php
    return view('cv');
});