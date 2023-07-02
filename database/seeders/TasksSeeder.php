<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=1; $i < 10; $i++) {
            $task = new Task;
            $task->name = 'homework';
            $task->user_id = $i;
            $task->save();
        }

    }
}
