<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'file_path' => fake()->imageUrl(),
            'imageable_type' => fake()->randomElement(
                ['App\Models\User', 'App\Models\Post']
            ),
            'imageable_id' => function (array $attributes) {
                $modelClass = $attributes['imageable_type'];
                $model = $modelClass::inRandomOrder()->first();
                return $model ? $model->id : null;
            },
        ];
    }
}
