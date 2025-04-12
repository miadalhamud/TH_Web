<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_amount'=> fake()->randomfloat(2,10,500),
            'payment_method' => fake()->randomElement(['cash', 'card', 'paypal']),
            'status' => fake()->randomElement(['paid' , 'unpaid']),
        ];
    }
}
