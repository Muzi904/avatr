<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('admin.profile.update');

    // roles
    Route::get('/roles', [RoleController::class, 'index'])->name('admin.roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('admin.roles.create');
    Route::post('/roles/store', [RoleController::class, 'store'])->name('admin.roles.store');
    Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('admin.roles.edit');
    Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('admin.roles.update');
    Route::delete('/roles/delete/{id}', [RoleController::class, 'destroy'])->name('admin.roles.delete');
    Route::get('/roles/permissions/{id}', [RoleController::class, 'rolePermissions'])->name('admin.roles.permissions');
    Route::post('/roles/permissions/update', [RoleController::class, 'rolePermissionsUpdate'])->name('admin.roles.permissions.update');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/update', [UserController::class, 'update'])->name('admin.users.update');
    // Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.delete');
    Route::get('/users/deactivate/{id}', [UserController::class, 'deactivate'])->name('admin.users.deactivate');
    Route::get('/users/activate/{id}', [UserController::class, 'activate'])->name('admin.users.activate');

    Route::post('/users/reassign', [UserController::class, 'reassign'])->name('admin.users.reassign');

    // all enquiry
    Route::get('/enquiry', [EnquiryController::class, 'index'])->name('admin.enquiry.index');
    // enquiry sales
    Route::get('/enquiry/sales-enquiry', [EnquiryController::class, 'salesEnquiry'])->name('admin.sales.enquiry.index');
    // enquiry customer support
    Route::get('/enquiry/customer-support', [EnquiryController::class, 'CustomerSupport'])->name('admin.customer.support.enquiry.index');
    // enquiry feedback
    Route::get('/enquiry/feedback', [EnquiryController::class, 'feedback'])->name('admin.feedback.enquiry.index');
    // submit a request
    Route::get('/enquiry/submit-a-request', [EnquiryController::class, 'submitRequest'])->name('admin.submit.request.enquiry.index');


    Route::get('/webinar/enquiry/{id}', [EnquiryController::class, 'show'])->name('admin.webinar.enquiry.show');

    Route::get('/enquiry/export', [EnquiryController::class, 'export'])->name('admin.enquiry.export');
});
