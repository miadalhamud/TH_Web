<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    $specialties = [
        [
            "id" => 1,
            "specialty" => "General Medicine"
        ],
        [
            "id" => 2,
            "specialty" => "Pediatrics"
        ],
        [
            "id" => 3,
            "specialty" => "Dentistry"
        ],
        [
            "id" => 4,
            "specialty" => "Ophthalmology" 
        ]
    ];
    return view('welcome' ,['specialties' => $specialties] );
});

Route::get('/specialty/{id}', function ($id) {
    $specialties = [
        [
            "id" => 1,
            "Doctor" => "Dr. Ali Hassan, General Practitioner",
            "Services" => "Routine health check-ups, treatment of common illnesses (such as flu, cold, and infections)",
            "Booking cost" => "150 SAR"
        ],
        [
            "id" => 2,
            "Doctor" => "Dr. Mohammed Ali, Pediatric Specialist",
            "Services" => "Child growth monitoring, vaccinations, treatment of common illnesses such as fever and cough",
            "Booking cost" => "200 SAR"
        ],
        [
            "id" => 3,
            "Doctor" => "Dr. Fatima Ibrahim, Dental Specialist",
            "Services" => "Teeth cleaning, fillings, oral surgeries, braces",
            "Booking cost" => "250 SAR"
        ],
        [
            "id" => 4,
            "Doctor" => "Dr. Reem Mohammed, Ophthalmologist",
            "Services" => "Vision tests, cataract treatment, retina examination",
            "Booking cost" => "300 SAR"
        ]
    ];
    $specialty = Arr::first($specialties, fn($specialty) => $specialty['id'] == $id);
    return view('specialty' , ['specialty' => $specialty]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

