<?php

namespace Database\Factories\User;

use App\Models\User\Post;
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
            'body' =>  $this->faker->paragraph(3),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
