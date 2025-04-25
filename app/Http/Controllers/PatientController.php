<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use App\Models\Specialty;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(): view {
        return view('patients' ,['patients' => Patient::all()]);
     }
    
    public function show(int $id): view {
        $patient = Patient::where('id' , $id)->firstOrFail();
        return view('patients' , ['patient' => $patient]);
     }
}
