<?php

use App\Http\Controllers\Website\EnquiryController;
use App\Http\Controllers\Website\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/register', function () {
    return redirect()->route('login');
});

Route::get('/invitation', [PageController::class, 'landing'])->name('landing');
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/avatr11', [PageController::class, 'avatr11'])->name('avatr11');
Route::get('/avatr12', [PageController::class, 'avatr12'])->name('avatr12');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/test-drive', [PageController::class, 'testDrive'])->name('test.drive');
Route::get('/car-details', [PageController::class, 'models'])->name(name: 'models');
Route::get('/car-details2', [PageController::class, 'models2'])->name(name: 'models2');
Route::get('/showrooms', action: [PageController::class, 'showrooms'])->name(name: 'showrooms');
Route::get('/request-a-quote', [PageController::class, 'requestQuote'])->name('request.quote');
Route::get('/experience-avatr', [PageController::class, 'experienceAvatr'])->name(name: 'experience.avatr');
Route::get('/ownership', [PageController::class, 'ownership'])->name(name: 'ownership');
Route::get('/discover', [PageController::class, 'discover'])->name(name: 'discover');
Route::get('/news', [PageController::class, 'news'])->name(name: 'news');


Route::post('/submit-invitations', [EnquiryController::class, 'submitInvitations'])->name('submit-invitation');

Route::post('/test-drive-submit', [EnquiryController::class, 'testDrive'])->name('test.drive.submit');
Route::post('/request-a-quote-submit', [EnquiryController::class, 'requestQuoteDrive'])->name('request.quote.submit');
Route::post('/contact-submit', [EnquiryController::class, 'contact'])->name('contact.submit');
Route::post('/experience-submit', [EnquiryController::class, 'experience'])->name('experience.submit');
