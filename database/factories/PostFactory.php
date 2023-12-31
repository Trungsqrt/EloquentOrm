<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        $users = DB::table('users')->pluck('id');

        return [
            'user_id' => fake()->randomElement($users),
            'title' => fake()->sentence(6),
            'body' => fake()->paragraph(),
        ];
    }
}
