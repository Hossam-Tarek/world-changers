<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'website.index')->name('home');
Route::view('/about', 'website.about')->name('about');
Route::get('/teachers', [HomeController::class , 'teachers'])->name('teachers');
Route::view('/register', 'website.register')->name('register');  //only for now
Route::view('/login', 'website.login')->name('login');  //only for now
Route::view('/compition/subscribe', 'website.compition-subscribe')->name('compition.subscribe');  //only for now
Route::view('/subscribe', 'website.subscribe')->name('subscribe');  //only for now
Route::view('/use-free', 'website.use-free')->name('use.free');
Route::view('/contact', 'website.contact')->name('contact');
Route::post('/contact', [HomeController::class , 'contact'])->name('contact.store');

//Route::view('/powergrid', 'powergrid-demo');

require __DIR__.'/auth.php';
