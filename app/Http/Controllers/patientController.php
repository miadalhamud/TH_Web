<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use App\Models\Specialty;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Doctor;


class patientController extends Controller
{
    public function index(): view {
        return view('patients.index' ,['patients' => Patient::all()]);
     }

    
    public function show( $id): view {
        $patient = Patient::where('id' , $id)->firstOrFail();
        return view('patients.patient' , ['patient' => $patient]);
     }

    }
