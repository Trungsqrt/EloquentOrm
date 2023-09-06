<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $posts = DB::table('posts')->pluck('id');
        $users = DB::table('users')->pluck('id');
        return [
            'body' => fake()->paragraph(),
            'post_id' => fake()->randomElement($posts),
            'user_id' => fake()->randomElement($users)
        ];
    }
}
