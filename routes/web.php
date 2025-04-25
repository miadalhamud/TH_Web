<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\AppointmentController;

Route::get('/', [SpecialtyController::class, 'index']);

Route::get('/specialty/{id}', [SpecialtyController::class, 'show']);

Route::get('/patients/{id}', [patientController::class, 'show'])->whereNumber('id');

Route::get('/appointments/create', [AppointmentController::class, 'create']);

Route::post('/appointments/create', [AppointmentController::class, 'store']);

Route::get('/appointments/index', [AppointmentController::class, 'index'])->name('appointments.index');


Route::get('/new_patient', function () {
    return view('patients.new_patient');
});

Route::get('/patients', function () {
    $patients = DB::table('patients')->get();
    return view('patients.index', compact('patients'));
});

Route::post('/new_patient', function (Request $request) {
    DB::table('patients')->insert([
        'name' => $request->name,
        'email' => $request-> email,
        'mobile'=> $request-> mobile,
        'age' => $request-> age,
        'medical_history' => $request->medical_history,
        
    ]);
    return redirect('/');
});


Route::get('/new_doctor', function () {
    return view('new_doctor');
});
Route::post('/new_doctor', function (Request $request) {
    DB::table('doctors')->insert([
        'name' => $request->name,
    ]);
    return redirect('/');
});

Route::get('/doctors', function () {
    $doctors = DB::table('doctors')->get();
    return view('doctors.index', compact('doctors'));
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

