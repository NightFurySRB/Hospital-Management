<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {return view('welcome'); });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);
Route::post('/donateBlood',[HomeController::class,'donateBlood']);
Route::post('/requestAppointment',[HomeController::class,'requestAppointment']);
Route::post('/requestTestAppointment',[HomeController::class,'requestTestAppointment']);
Route::get('/mydashboard',[HomeController::class,'myDashboard']);
Route::get('/cancelDonation/{id}',[HomeController::class,'cancelDonation']);
Route::get('/cancelAppointment/{id}',[HomeController::class,'cancelAppointment']);
Route::get('/deleteTestReq/{id}',[HomeController::class,'deleteTestReq']);

Route::get('/approveAppointment/{id}',[AdminController::class,'approveAppointment']);
Route::get('/approveTestAppointment/{id}',[AdminController::class,'approveTestAppointment']);
Route::get('/cancelAppointmentAdmin/{id}',[AdminController::class,'cancelAppointmentAdmin']);
Route::get('/cancelTestAppointmentAdmin/{id}',[AdminController::class,'cancelTestAppointmentAdmin']);
Route::get('/addDoctor',[AdminController::class,'addDoc']);
Route::get('/addTest',[AdminController::class,'addTest']);
Route::get('/showAppointments',[AdminController::class,'showAppointments']);
Route::get('/showTestAppointments',[AdminController::class,'showTestAppointments']);
Route::get('/showBloodDonations',[AdminController::class,'showBloodDonations']);
Route::get('/showDoctors',[AdminController::class,'showDoctors']);
Route::get('/fireDoctor/{id}',[AdminController::class,'fireDoctor']);
Route::get('/updateDoctor/{id}',[AdminController::class,'updateDoctor']);
Route::post('/saveDoctorChanges/{id}',[AdminController::class,'saveDoctorChanges']);
Route::post('/uploadDocInfo',[AdminController::class,'uploadDoc']);
Route::post('/uploadTestInfo',[AdminController::class,'uploadTest']);
