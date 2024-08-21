<?php

namespace Database\Factories\Interviews;

use App\Models\Interviews\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interviews\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->name(),
            'body' => fake()->name(),
            'user_id' => 
        ];
    }
}
