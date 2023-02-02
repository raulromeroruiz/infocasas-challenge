<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tasks;
use App\Models\User;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(User::all() as $user) {
            Tasks::factory()->count(10)->for($user)->create();
        }
    }
}
