<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

// routes/web.php
Route::get('/webhook', function () {
    return 'Webhook OK 🚀';
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/home', function () {
//     return view('home');
// });
