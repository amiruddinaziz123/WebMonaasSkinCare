<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\LogsignController;
use Illuminate\Support\Facades\Route;

use App\Models\navbar;

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

Route::get('/aboutusAdmin', function () {
    return view('aboutusAdmin.index');
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

// Route::controller(LogsignController::class)->group(function () {
//     Route::get('/logsignAdmin/edit','edit')->name('logsignAdmin.edit');
//     Route::put('/logsignAdmin/update', 'update')->name('logsignAdmin.update');
// });

Route::resource('/booking', \App\Http\Controllers\BookingController::class);
Route::resource('/navbarAdmin', \App\Http\Controllers\navbarAdminController::class);
// Route::resource('/logsignAdmin', \App\Http\Controllers\LogsignController::class);
// // Untuk menampilkan form penyuntingan
// Route::get('/logsignAdmin/{logsignAdmin}/edit', [LogsignController::class, 'edit'])->name('logsign.edit');

// // Untuk menyimpan perubahan yang dilakukan pada form penyuntingan
// Route::put('/logsignAdmin/{logsignAdmin}/update', [LogsignController::class, 'update'])->name('logsign.update');

Route::controller(LogsignController::class)->group(function () {
    Route::get('/logsignAdmin', 'index')->name('logsignAdmin.index');
    Route::post('/logsignAdmin/edit', 'store')->name('logsignAdmin.store');
});



Route::get('/treatment', function () {
    return view('treatment.index');
});

Route::get('/profil', function () {
    return view('profil.index');
});


Route::controller(TreatmentController::class)->group(function () {
    Route::get('/treatment_admin', 'admin')->name('treatment_admin.admin');
    // Route::get('/treatment_admin/history', 'history')->name('treatment_adminn.history');
    Route::get('/treatment_admin/create', 'create')->name('treatment_admin.create');
    Route::post('/treatment_admin/kirim', 'store')->name('treatment_admin.store');
    Route::get('/treatment_admin/edit/{slug_link}', 'edit')->name('treatment_admin.edit');
    Route::put('/treatment_admin/update/{slug_link}', 'update')->name('treatment_admin.update');
    // Route::get('/treatment_admin/hapus/{slug_link}', 'hapus')->name('treatment_admin.hapus');
    // Route::put('/treatment_admin/softdelete/{slug_link}', 'softdelete')->name('treatment_admin.softdelete');
});
