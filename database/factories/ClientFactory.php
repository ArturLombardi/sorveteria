<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use Faker\Provider\pt_BR\Person;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->client(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'perfil_name' => $this->faker->unique()->userName(),
            'cpf' => $this->faker->unique()->numerify('###########'),
            'birthday' => $this->faker->dateTimeInInterval('-70 years', '-18 years')->format('Y-m-d'),
            'phone' => $this->faker->optional()->phoneNumber(false),
            'gender' => $this->faker->optional()->randomElement(['male', 'female', 'other']),
            'preferences' => null
        ];
    }
}
