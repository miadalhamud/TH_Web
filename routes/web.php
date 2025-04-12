<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\PatientController;


Route::get('/', [SpecialtyController::class, 'index']);

Route::get('/specialty/{id}', [SpecialtyController::class, 'show']);


Route::get('/new_patient', function () {
    return view('new_patient');
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

