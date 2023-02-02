<?php

namespace Database\Factories;

use App\Models\Tasks;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class TasksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tasks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(4, true),
            'completed' => $this->faker->boolean(),
            'deadline' => $this->faker->dateTime(),
        ];
    }
}
