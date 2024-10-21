<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/laravel', function () {
    return view('pages.laravel.start');
})->name('laravel');

Route::get('/docker', function () {
    return view('pages.docker.start');
})->name('docker');