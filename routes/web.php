<?php

use App\Http\Controllers\Website\EnquiryController;
use App\Http\Controllers\Website\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/avatr11', [PageController::class, 'avatr11'])->name('avatr11');
Route::get('/avatr12', [PageController::class, 'avatr12'])->name('avatr11');