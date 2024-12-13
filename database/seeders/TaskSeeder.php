<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'title' => 'Tarea 1',
            'description' => 'Descripción 1',
            'user_id' => 1
        ]);
        DB::table('tasks')->insert([
            'title' => 'Tarea 2',
            'description' => 'Descripción 2',
            'user_id' => 1
        ]);
        DB::table('tasks')->insert([
            'title' => 'Tarea 3',
            'description' => 'Descripción 3',
            'user_id' => 1
        ]);
    }
}
