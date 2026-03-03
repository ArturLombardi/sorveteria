<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
Use App\Models\Client;
use App\Models\Attendant;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::inRandomOrder()->first()->id,
            'attendant_id' => Attendant::inRandomOrder()->first()->id,
            'invoice_date' => $this->faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
            'total_amount' => 0,
        ];
    }
}
