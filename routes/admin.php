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

    Route::get('/dashboard/counts', [DashboardController::class, 'dashboardCounts'])->name('admin.dashboard.counts');
    Route::get('/dashboard/counts/total', [DashboardController::class, 'dashboardCountsTotal'])->name('admin.dashboard.counts.total');
    Route::get('/dashboard/counts/sold', [DashboardController::class, 'dashboardCountsSold'])->name('admin.dashboard.counts.sold');
    Route::get('/dashboard/counts/follow-up', [DashboardController::class, 'dashboardCountsFollowup'])->name('admin.dashboard.counts.follow-up');


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
    Route::get('/invitation', [EnquiryController::class, 'invitation'])->name('admin.invitation.index');
    Route::get('/test-drive', [EnquiryController::class, 'testDrive'])->name('admin.test-drive.index');
    Route::get('/request-quote', [EnquiryController::class, 'requestQuote'])->name('admin.request.quote.index');
    Route::get('/contact', [EnquiryController::class, 'contact'])->name('admin.contact.index');
    Route::get('/experience', [EnquiryController::class, 'experience'])->name('admin.experience.index');

    Route::get('/enquiry/clear-session', [EnquiryController::class, 'clearSession'])->name('admin.enquiry.clear.session');

    Route::post('/enquiry/export', [EnquiryController::class, 'export'])->name('admin.enquiry.export');

    Route::get('/check-mail', [EnquiryController::class, 'checkMail']);
});
