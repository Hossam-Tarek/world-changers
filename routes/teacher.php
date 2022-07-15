<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('isTeacher')->group(function () {
    Route::get('/', HomeController::class)->name('home');

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [ProfileController::class, 'show'])->name('show');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/', [ProfileController::class, 'update'])->name('update');
    });
    Route::get('/change-password', [ProfileController::class, 'changePasswordView'])->name('password.change');
    Route::post('/change-password', [ProfileController::class, 'changePassword']);
});

require __DIR__.'/teacher-auth.php';
