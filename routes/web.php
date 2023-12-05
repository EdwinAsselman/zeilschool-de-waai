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

// Main homepage of the application.
Route::get('/', function () {
    return view('home');
})->name('home');

// COURSES
Route::get('/cursussen', function () {
    return view('cursussen');
})->name('cursussen');

// Contact page.
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// DASHBOARD
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
