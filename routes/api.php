<?php

use App\Http\Controllers\divisions\DivisionController;
use App\Http\Controllers\doctors\DoctorController;
use App\Http\Controllers\nurses\NurseController;
use App\Http\Controllers\patients\PatientController;
use App\Http\Controllers\schedule\ScheduleController;
use App\Http\Controllers\static_type\BloodTypeController;
use App\Http\Controllers\static_type\SexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// sex
Route::get('/sexs', [SexController::class, 'index']);
Route::post('/storeSexs', [SexController::class, 'store']);
// sex

// division
Route::get('/divisions', [DivisionController::class, 'index']);
Route::post('/storeDivisions', [DivisionController::class, 'store']);
// division

// doctors
Route::get('/doctors', [DoctorController::class, 'index']);
Route::post('/storeDoctors', [DoctorController::class, 'store']);
// doctors

// nurses
Route::get('/nurses', [NurseController::class, 'index']);
Route::post('/storeNurses', [NurseController::class, 'store']);
// nurses

// bloodType
Route::get('/bloodTypes', [BloodTypeController::class, 'index']);
Route::post('/storeBloodTypes', [BloodTypeController::class, 'store']);
// bloodType

// patients
Route::get('/patients', [PatientController::class, 'index']);
Route::post('/storePatients', [PatientController::class, 'store']);
// patients

// schedules
Route::get('/schedules', [ScheduleController::class, 'index']);
// schedules