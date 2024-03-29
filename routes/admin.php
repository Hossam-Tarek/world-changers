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

    Route::get('/subjects/template', [SubjectController::class, 'downloadTemplate'])->name('subjects.template')->middleware('role_or_permission:super-admin|subjects,admin');
    Route::post('/subjects/import', [SubjectController::class, 'import'])->name('subjects.import')->middleware('role_or_permission:super-admin|subjects,admin');
    Route::resource('/subjects', SubjectController::class)->except(['show', 'destroy'])->middleware('role_or_permission:super-admin|subjects,admin');

    Route::resource('/pages', PageController::class)->only(['index', 'edit', 'update'])->middleware('role_or_permission:super-admin|pages,admin');

    Route::get('/units/template', [UnitController::class, 'downloadTemplate'])->name('units.template')->middleware('role_or_permission:super-admin|units,admin');
    Route::post('/units/import', [UnitController::class, 'import'])->name('units.import')->middleware('role_or_permission:super-admin|units,admin');
    Route::resource('/units', UnitController::class)->except(['show', 'destroy'])->middleware('role_or_permission:super-admin|units,admin');

    Route::get('/lessons/template', [LessonController::class, 'downloadTemplate'])->name('lessons.template')->middleware('role_or_permission:super-admin|lessons,admin');
    Route::post('/lessons/import', [LessonController::class, 'import'])->name('lessons.import')->middleware('role_or_permission:super-admin|lessons,admin');
    Route::resource('/lessons', LessonController::class)->except(['show', 'destroy'])->middleware('role_or_permission:super-admin|lessons,admin');
});
