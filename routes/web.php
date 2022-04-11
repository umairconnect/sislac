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
Use App\Http\Controllers\CustomAuthController;
Use App\Http\Controllers\Appointment\NewAppointment;
Use App\Http\Controllers\Patient\PatientAdd;

Route::get('/', function () {
    return view('auth.login');
});



Route::group(['middleware' => ['auth']], function() {

    //Appointment
    Route::get('/new-appointment', function () {
        return view('appointment.newAppointment');
    })->name('new-appointment');
    Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

    Route::post('addappointment', [NewAppointment::class, 'addNewAppointment'])->name('addappointment');

    Route::get('viewappointment', [NewAppointment::class, 'showlist'])->name('viewAppointment');

    //patient
    Route::get('/new-patient', function () {
        return view('patient.newPatient');
    })->name('new-patient');
    Route::post('addpatient', [PatientAdd::class, 'addNewPatient'])->name('addpatient');

    Route::get('viewpatient', [PatientAdd::class, 'showPatientList'])->name('viewpatient');


});






Route::get('logout', [CustomAuthController::class, 'logOut'])->name('logout');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

