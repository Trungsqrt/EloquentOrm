<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Taggable>
 */
class TaggableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // ác model có quan hệ với taggables
        $taggableTypes = ['App\\Models\\Post', 'App\\Models\\Comment'];

        // Ngẫu nhiên 1 type
        $taggableType = $this->faker->randomElement($taggableTypes);

        // Lấy id
        $taggableId = $taggableType::inRandomOrder()->first()->id;

        return [
            'tag_id' => Tag::inRandomOrder()->first()->id,
            'taggable_id' => $taggableId,
            'taggable_type' => $taggableType,
        ];
    }
}
