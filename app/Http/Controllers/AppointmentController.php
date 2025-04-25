<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use App\Models\Specialty;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Doctor;


class AppointmentController extends Controller
{
    private array $validators = [
        'appointment_time' => ['required'],
        'appointment_date'=>['required'],
        'doctor_id' =>['required', 'exists:doctors,id'],
        'patient_id' => ['required', 'exists:patients,id'],
    ];
    public function index(): view {
        return view('appointments.index' ,['appointments' => Appointment::all()]);
     }

     public function show( $id): view {
        $appointment = Appointment::where('id' , $id)->firstOrFail();
        return view('appointments.appointment' , ['appointment' => $appointment]);
     }


     public function create(): View {
        return view('appointments.create', [
            'appointments' => Appointment::all(),
            'doctors' => Doctor::all(),
            'patient_id' => request('patient_id')
        ]);
    }
    public function store(){
        request()->validate($this->validators);
        Appointment::create(request()->all());
        return redirect('/appointments.index');
    }

    }