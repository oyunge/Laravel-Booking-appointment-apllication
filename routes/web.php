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

Route::get('/', function () {
    return view('index');
});
Route::get('/appointment', function () {
    return view('appointment');
});

Route::post('/appointment', [\App\Http\Controllers\AppointmentController::class,'bookAppointment']);
Route::get('/admin', [\App\Http\Controllers\AdminController::class,'showAppointments']);
Route::get('/admin/{id}', [\App\Http\Controllers\AdminController::class, 'deleteAppointment'])->name('admin.appointment.destroy');
Route::get('/approveAppointments/{id}', [\App\Http\Controllers\AdminController::class, 'approveAppointment'])->name('admin.approvedAppointments');
Route::get('/approvedAppointments', [\App\Http\Controllers\AdminController::class,'approvedAppointments']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


