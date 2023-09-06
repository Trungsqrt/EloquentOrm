<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupUser>
 */
class GroupUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $groups = DB::table('groups')->pluck('id');
        $users = DB::table('users')->pluck('id');

        return [
            'group_id' => fake()->randomElement($groups),
            'user_id' => fake()->randomElement($users),
        ];
    }
}
