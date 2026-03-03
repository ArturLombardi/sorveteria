<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $flavors = [
            'Chocolate',
            'Baunilha',
            'Morango',
            'Flocos',
            'Napolitano',
            'Doce de Leite',
            'Coco',
            'Pistache',
            'Limão Siciliano',
            'Manga',
            'Maracujá',
            'Açaí',
            'Uva',
            'Melancia',
        ];

        $cost = $this->faker->randomFloat(2, 2, 8);
        $price = $cost + $this->faker->randomFloat(2, 3, 10);

        return [
            'name' => $this->faker->randomElement($flavors),
            'category_id' => Category::inRandomOrder()->first()->id,
            'cost' => $cost,
            'price' => $price,
            'active' => $this->faker->boolean(90), // 90% ativos
        ];
    }
}
