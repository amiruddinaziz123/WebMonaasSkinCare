<?php

use App\Http\Controllers\BookingController;
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
    return view('landingPage');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/signup', function () {
    return view('signup.index');
});

Route::get('/aboutus', function () {
    return view('aboutus.index');
});

// untuk coba pake /posts
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::resource('/booking', \App\Http\Controllers\BookingController::class);

Route::get('/treatment', function () {
    return view('treatment.index');
});

Route::get('/profil', function () {
    return view('profil.index');
});
