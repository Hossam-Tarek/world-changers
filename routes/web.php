<?php


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
Route::view('/teachers', 'website.teachers')->name('teachers');  //only for now
Route::view('/register', 'website.register')->name('register');  //only for now
Route::view('/login', 'website.login')->name('login');  //only for now
Route::view('/compition/subscribe', 'website.compition-subscribe')->name('compition.subscribe');  //only for now
Route::view('/subscribe', 'website.subscribe')->name('subscribe');  //only for now
Route::view('/use-free', 'website.use-free')->name('use.free');
Route::view('/contact', 'website.contact')->name('contact');

//Route::view('/powergrid', 'powergrid-demo');

require __DIR__.'/auth.php';
