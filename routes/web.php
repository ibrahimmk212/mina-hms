<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\PharmacistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', action: [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth_login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth_login']);
Route::get('/verify-otp', function () {
    return view('auth.verify-otp'); // Create this view
})->name('verify.otp');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [AdminDashboardController::class, 'admin_dashboard']);
    Route::get('/admin/role', [RoleController::class, 'list']);
    Route::get('/admin/role/add', [RoleController::class, 'add']);
    Route::post('/admin/role/add', [RoleController::class, 'create']);
    Route::get('/admin/role/edit/{id}', [RoleController::class, 'edit']);
    Route::post('/admin/role/edit/{id}', [RoleController::class, 'update']);
    Route::get('/admin/role/delete/{id}', [RoleController::class, 'delete']);

    // Users
    Route::get('/admin/user', [UserController::class, 'list']);
    Route::get('/admin/user/add', [UserController::class, 'add']);
    Route::post('/admin/user/add', [UserController::class, 'create']);
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/admin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('/admin/user/delete/{id}', [UserController::class, 'delete']);

});

Route::group(['middleware' => 'doctor'], function () {
    Route::get('/doctor', [DoctorController::class, 'doctor_dashboard']);
    Route::get('/doctor/patients', [PatientController::class, 'index']);
    Route::get('/doctor/patients/in', [PatientController::class, 'in_patient']);
    Route::get('/doctor/patients/out', [PatientController::class, 'out_patient']);
    Route::get('/doctor/patients/add', [PatientController::class, 'add']);
    Route::post('/doctor/patients/add', [PatientController::class, 'create']);
    Route::get('/doctor/patients/edit/{id}', [PatientController::class, 'edit']);
    Route::post('/doctor/patients/edit/{id}', [PatientController::class, 'update']);
    Route::get('/doctor/patients/delete/{id}', [PatientController::class, 'delete']);

    Route::get('/doctor/appointments', [AppointmentController::class, 'doctor_appointments']);
    Route::get('/doctor/appointments/scheduled', [AppointmentController::class, 'doctor_completed_appointments']);
    Route::get('/doctor/appointments/done', [AppointmentController::class, 'doctor_scheduled_appointments']);

});

Route::group(['middleware' => 'nurse'], function () {
    Route::get('/nurse', [NurseController::class, 'nurse_dashboard']);
    Route::get('/nurse/patients', [PatientController::class, 'nurse_patients']);
    Route::get('/nurse/patients/in', [PatientController::class, 'nurse_in_patient']);
    Route::get('/nurse/patients/out', [PatientController::class, 'nurse_out_patient']);
    Route::get('/nurse/patients/add', [PatientController::class, 'add']);
    Route::post('/nurse/patients/add', [PatientController::class, 'create']);
    Route::get('/nurse/patients/edit/{id}', [PatientController::class, 'edit']);
    Route::post('/nurse/patients/edit/{id}', [PatientController::class, 'update']);
    Route::get('/nurse/patients/delete/{id}', [PatientController::class, 'delete']);

    Route::get('/nurse/appointments', [AppointmentController::class, 'appointments']);
    Route::get('/nurse/appointments/scheduled', [AppointmentController::class, 'completed_appointments']);
    Route::get('/nurse/appointments/done', [AppointmentController::class, 'scheduled_appointments']);

});

Route::group(['middleware' => 'pharmacist'], function () {
    Route::get('/pharmacist', [pharmacistController::class, 'pharmacist_dashboard']);
    Route::get('/pharmacist/patients', [PatientController::class, 'pharmacist_patients']);
    Route::get('/pharmacist/patients/in', [PatientController::class, 'pharmacist_in_patient']);
    Route::get('/pharmacist/patients/out', [PatientController::class, 'pharmacist_out_patient']);
    Route::get('/pharmacist/patients/add', [PatientController::class, 'add']);
    Route::post('/pharmacist/patients/add', [PatientController::class, 'create']);
    Route::get('/pharmacist/patients/edit/{id}', [PatientController::class, 'edit']);
    Route::post('/pharmacist/patients/edit/{id}', [PatientController::class, 'update']);
    Route::get('/pharmacist/patients/delete/{id}', [PatientController::class, 'delete']);

    Route::get('/pharmacist/appointments', [AppointmentController::class, 'appointments']);
    Route::get('/pharmacist/appointments/scheduled', [AppointmentController::class, 'completed_appointments']);
    Route::get('/pharmacist/appointments/done', [AppointmentController::class, 'scheduled_appointments']);

});