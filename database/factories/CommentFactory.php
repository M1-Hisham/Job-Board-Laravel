<?php

namespace Database\Factories;

use App\Models\comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //     'content' => 'This is a sample comment body.',
            //     'author' => 'Commenter Name',
            //     'post_id' => 5,
            'content' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'post_id' => \App\Models\Post::factory(),
        ];
    }
}
