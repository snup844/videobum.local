<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
   return view('home/index');
})->name('/');

Route::get('/about', function (){
    return view('home/about');
})->name('url-about');
//return view('layouts.main');
//Route::get('/', [HomeController::class, 'index']);
//Route::get('/about', [HomeController::class, 'index']);

