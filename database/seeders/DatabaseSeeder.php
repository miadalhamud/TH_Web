<?php

namespace Database\Seeders;

use App\Models\Specialty;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Patient::factory()->count(5)->create();
        Doctor::factory()->count(3)->create();

        Appointment::factory()->create([
            'patient_id' => 1,
            'doctor_id' => 1,
        ]);

        Appointment::factory()->create([
            'patient_id' => 2,
            'doctor_id' => 1,
        ]);

        Appointment::factory()->create([
            'patient_id' => 1,
            'doctor_id' => 2,
        ]);

        Payment::factory()->create([
            'appointment_id' => 1,
        ]);

        Payment::factory()->create([
            'appointment_id' => 2,
        ]);

        Specialty::create([
            'specialty' => 'General Medicine',
            'Doctor' => 'Dr. Ali Hassan, General Practitioner',
            'Services' => 'Routine health check-ups, treatment of common illnesses (such as flu, cold, and infections)',
            'Booking cost' => 150
        ]);
        Specialty::create([
            'specialty' => 'Pediatrics',
            'Doctor' => 'Dr. Mohammed Ali, Pediatric Specialist',
            'Services' => 'Child growth monitoring, vaccinations, treatment of common illnesses such as fever and cough',
            'Booking cost' => 200
        ]);


    }
}
