<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function() {
    return view('about', [
        'appName' => "Laravel Test App",
        'appVer' => "1.0.0",
    ]);
});

Route::get('/contact', function() {
    return view('contact');
});
