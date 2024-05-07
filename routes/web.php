<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\LogsignController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfilController;
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


Route::get('/aboutus', function () {
    return view('aboutus.index');
});

Route::get('/aboutusAdmin', function () {
    return view('aboutusAdmin.index');
});


// untuk coba pake /posts
Route::resource('/posts', \App\Http\Controllers\PostController::class);

// Route::controller(LogsignController::class)->group(function () {
//     Route::get('/logsignAdmin/edit','edit')->name('logsignAdmin.edit');
//     Route::put('/logsignAdmin/update', 'update')->name('logsignAdmin.update');
// });

Route::resource('/booking', \App\Http\Controllers\BookingController::class);
Route::resource('/navbarAdmin', \App\Http\Controllers\navbarAdminController::class);

// ROUTE UNTUK LOGIN SIGNUP DAN ADMINNYA
Route::controller(LogsignController::class)->group(function () {
    Route::get('/logsignAdmin', 'index')->name('logsignAdmin.index');
    Route::get('/login', 'indexLogin')->name('logsignAdmin.index');
    Route::get('/signup', 'indexSignup')->name('logsignAdmin.index');
    Route::post('/logsignAdmin/edit', 'store')->name('logsignAdmin.store');
});

// ROUTE UNTUK MASTER ADMIN
Route::controller(MasterController::class)->group(function () {
    Route::get('/masterAdmin', 'index')->name('masterAdmin.index');
    Route::get('/customerAdmin', 'indexCustomer')->name('customerAdmin.index');
    Route::post('/masterAdmin/add', 'store')->name('masterAdmin.store');
});

// ROUTE UNTUK ABOUT US DAN ADMINNYA
Route::controller(AboutusController::class)->group(function () {
    Route::get('/aboutus', 'index')->name('aboutus.index');
    Route::get('/aboutusAdmin', 'indexAdmin')->name('aboutusAdmin.index');
});

// ROUTE UNTUK PROFIL DAN ADMINNYA
Route::controller(ProfilController::class)->group(function () {
    Route::get('/profil', 'index')->name('profil.index');
});



Route::get('/treatment', function () {
    return view('treatment.index');
});



Route::controller(TreatmentController::class)->group(function () {
    Route::get('/treatment_admin', 'admin')->name('treatment_admin.admin');
    // Route::get('/treatment_admin/history', 'history')->name('treatment_adminn.history');
    Route::get('/treatment_admin/create', 'create')->name('treatment_admin.create');
    Route::post('/treatment_admin/kirim', 'store')->name('treatment_admin.store');
    Route::get('/treatment_admin/edit/{slug_link}', 'edit')->name('treatment_admin.edit');
    Route::put('/treatment_admin/update/{slug_link}', 'update')->name('treatment_admin.update');
    // Route::get('/treatment_admin/hapus/{slug_link}', 'hapus')->name('treatment_admin.hapus');
    Route::put('/treatment_admin/softdelete/{slug_link}', 'softdelete')->name('treatment_admin.softdelete');
});
