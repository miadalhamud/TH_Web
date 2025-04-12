<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
    public function index(): view {
        return view('welcome' ,['specialties' => Specialty::all()]);
     }
    public function show(int $id): view {
        $specialty = Specialty::where('id' , $id)->firstOrFail();
        return view('specialty' , ['specialty' => $specialty]);
     }
}
