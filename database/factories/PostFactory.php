<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'category_id' => function () {
                return Category::inRandomOrder()->first()->id;
            },
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            //  use imageUrl() which generates a random image URL, instead of text()
            'image' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug,
            'published' => $this->faker->boolean,
            'featured' => $this->faker->boolean,
        ];
    }
}

