<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use DavidBadura\FakerMarkdownGenerator\FakerProvider;
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
        $this->faker->addProvider(new FakerProvider($this->faker));

        return [
            'title'   => $this->faker->text(100),
            'content' => $this->faker->text(1000),
            'user_id' => User::first()->id,
        ];
    }
}
