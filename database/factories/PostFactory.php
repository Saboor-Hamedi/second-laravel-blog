<?php

namespace Database\Factories;

use App\Models\Post;
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

    // insert dummy data into table
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'body' => $this->faker->paragraph,
            'created_at' => now(),
        ];
    }
}
