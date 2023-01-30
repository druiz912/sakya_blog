<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Use unique in the name
            'name' => $this->faker->unique()->word,
            'slug' => $this->faker->slug,
            'active' => $this->faker->randomElement([0,1]),
            'color' => $this->faker->hexColor
        ];
    }
}

