<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendant>
 */
class AttendantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'attendants_id' => User::factory()->attendant(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'employee_id' => $this->faker->unique()->bothify('EMP###??'),
            'hired_date' => $this->faker->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'department' => $this->faker->randomElement(['Sales']),
            'phone' => $this->faker->phoneNumber(false),
            'institutional_email' => $this->faker->unique()->safeEmail(),
            'salary' => $this->faker->randomFloat(2, 1000, 5000),
            'skills' => null
        ];
    }
}
