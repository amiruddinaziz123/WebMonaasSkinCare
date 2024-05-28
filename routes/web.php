<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\LogsignController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProductController;
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

Route::get('/landingcobaumar', function () {
    return view('landingTry');
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
    Route::get('/login', 'indexLogin')->name('login.index');
    Route::post('/prosesLogin', 'prosesLogin')->name('login.store');
    Route::get('/signup', 'indexSignup')->name('signupAdmin.index');
    Route::post('/logsignAdmin/edit', 'store')->name('logsignAdmin.store');
    Route::post('/signup/add', 'storeSignup')->name('signup.store');
});

// ROUTE UNTUK BOOKING DAN ADMINNYA
Route::controller(BookingController::class)->group(function () {
    Route::get('/bookingAdmin', 'bookingAdmin')->name('bookingAdmin.index');
    Route::get('/bookingAdmin/edit/{id}', 'edit')->name('bookingAdmin.edit');
    Route::put('/bookingAdmin/edit/{id}', 'update')->name('bookingAdmin.update');
});

// ROUTE UNTUK MASTER ADMIN
Route::controller(MasterController::class)->group(function () {
    Route::get('/masterAdmin', 'indexAdd')->name('masterAdmin.index');
    Route::get('/customerAdmin', 'indexCustomer')->name('customerAdmin.index');
    Route::get('/customerAdmin/histori', 'indexHistori')->name('customerAdmin.histori');
    Route::get('/customerAdmin/edit/{slug_link}', 'indexEdit')->name('customerAdmin.edit');
    Route::get('/customerAdmin/detail/{slug_link}', 'indexDetail')->name('customerAdmin.detail');
    Route::get('/customerAdmin/softdelete/{slug_link}', 'indexSoftdelete')->name('customerAdmin.softdelete');
    Route::get('/customerAdmin/restore/{slug_link}', 'indexRestore')->name('customerAdmin.restore');
    Route::get('/customerAdmin/delete/{slug_link}', 'indexDelete')->name('customerAdmin.delete');
    Route::put('/customerAdmin/softdelete/{slug_link}', 'softdelete')->name('customerAdmin.softdeleted');
    Route::put('/customerAdmin/edit/{slug_link}', 'update')->name('customerAdmin.update');
    Route::post('/masterAdmin/add', 'store')->name('masterAdmin.store');
    Route::delete('/customerAdmin/{slug}', 'destroy')->name('customerAdmin.destroy');
});


// ROUTE UNTUK ABOUT US DAN ADMINNYA
Route::controller(AboutusController::class)->group(function () {
    Route::get('/aboutus', 'index')->name('aboutus.index');
    Route::get('/aboutusAdmin', 'indexAdmin')->name('aboutusAdmin.index');
    Route::post('/aboutusAdmin/edit', 'store')->name('aboutusAdmin.store');
});

// ROUTE UNTUK PROFIL DAN ADMINNYA
Route::controller(ProfilController::class)->group(function () {
    Route::get('/profil', 'index')->name('profil.index');
});


//ROUTE UNTUK TREATMENT DAN ADMINNYA
Route::controller(TreatmentController::class)->group(function () {
    Route::get('/treatment', 'index')->name('treatment.index');
    // ADMIN TREATMENT
    Route::get('/treatment_admin', 'admin')->name('treatment_admin.admin');
    Route::get('/treatment_admin/history', 'history')->name('treatment_admin.history');
    Route::get('/treatment_admin/create', 'create')->name('treatment_admin.create');
    Route::post('/treatment_admin/kirim', 'store')->name('treatment_admin.store');
    Route::get('/treatment_admin/edit/{slug_link}', 'edit')->name('treatment_admin.edit');
    Route::put('/treatment_admin/update/{slug_link}', 'update')->name('treatment_admin.update');
    Route::get('/treatment_admin/hapus/{slug_link}', 'hapus')->name('treatment_admin.hapus');
    Route::put('/treatment_admin/softdelete/{slug_link}', 'softdelete')->name('treatment_admin.softdelete');
    Route::post('/treatment_admin/restore/{slug_link}', 'restore')->name('treatment_admin.restore');
    Route::delete('/treatment_admin/permanent-delete/{id}', 'deletePermanent')->name('treatment_admin.deletePermanent');
});

// ROUTE UNTUK PRODUCT DAN ADMINNYA
Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'indexProduct')->name('product.index');
    Route::get('/productAdmin', 'indexAdmin')->name('productAdmin.index');
    Route::get('/productAdmin/histori', 'indexHistori')->name('productAdmin.histori');
});



