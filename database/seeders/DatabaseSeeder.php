<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specialty;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
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
