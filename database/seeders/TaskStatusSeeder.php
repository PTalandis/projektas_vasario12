<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\TaskStatus;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaskStatus::factory()->count(3)->create();
    }
}
