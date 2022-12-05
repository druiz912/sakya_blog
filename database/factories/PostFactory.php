<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'category_id' => rand(1,2),
            'title' => $this->faker->sentence(3),
            'body'=> $this->faker->text(150),
            'image' => $this->faker->text(),
            'slug' => $this->faker->sentence(10) ,
            'published' => $this->faker->randomElement([0,1]),
            'featured' => $this->faker->randomElement([0,1])
        ];
    }
}
