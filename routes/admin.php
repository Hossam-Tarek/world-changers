<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [Auth\AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [Auth\AuthenticatedSessionController::class, 'store']);
});

Route::middleware('isAdmin')->group(function () {
    Route::post('logout', [Auth\AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/', HomeController::class)->name('home');

    Route::get('/settings', [SettingController::class, 'edit'])->name('settings.edit')->middleware('role_or_permission:super-admin|settings,admin');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::put('/', [ProfileController::class, 'update'])->name('update');
        Route::post('/password', [ProfileController::class, 'changePassword'])->name('password');
    });

    Route::resource('/roles', RoleController::class)->except('show')->middleware('role_or_permission:super-admin|roles,admin');

    Route::resource('/admins', AdminController::class)->except('show')->middleware('role_or_permission:super-admin|admins,admin');
    Route::post('/admins/{admin}/password', [AdminController::class, 'changePassword'])->name('admins.password')->middleware('role_or_permission:super-admin|admins,admin');

    Route::resource('/subjects', SubjectController::class)->except(['show', 'destroy'])->middleware('role_or_permission:super-admin|subject,admin');
});
