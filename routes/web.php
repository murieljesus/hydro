<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//views

Route :: view('/index','index')->name('index');
Route :: view('/', 'index')->name('index');
Route :: view('/about', 'about')->name('about');
Route :: view('/contact', 'contact')->name('contact');
// Route :: view('/profile', 'profile')->name('profile');
// Route :: view('/changePassword','changePassword')->name('changePassword');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
