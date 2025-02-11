<?php

use App\Http\Controllers\API\EnquiryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('add-enquiry', [EnquiryController::class, 'addEnquiry']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
