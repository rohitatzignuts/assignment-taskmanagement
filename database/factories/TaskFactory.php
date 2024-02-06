<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    public function definition(): array {
        return [
            'user_id' => User::factory(),
            'title' => fake()->catchPhrase(),
            'description' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'due-date' => fake()->dateTime(),
        ];
    }

}
