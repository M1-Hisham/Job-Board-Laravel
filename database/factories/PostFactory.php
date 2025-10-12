<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
            //     'title' => 'Sample Post Title',
            //     'author' => 'Author Name',
            //     'author2' => 'Co-Author Name',
            //     'body' => 'This is the body of the sample post.',
            //     'poblished' => true,
            
            "title" => $this->faker->sentence,
            "body" => $this->faker->paragraph,
            "author" => $this->faker->name,
            "author2" => $this->faker->name,
            "poblished" => $this->faker->boolean,
        ];

    }
}
