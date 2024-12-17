<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
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
            'description' => 'Comprar pan',
        ]);
        $user = User::find(1);
        $user->sharedTasks()->attach(1, ['permission' => 'owner']);
        DB::table('tasks')->insert([
            'title' => 'Tarea 2',
            'description' => 'Enviar fotos a la abuela',
        ]);
        $user = User::find(1);
        $user->sharedTasks()->attach(2, ['permission' => 'owner']);
        DB::table('tasks')->insert([
            'title' => 'Tarea 3',
            'description' => 'Bombardear Australia',
        ]);
        $user = User::find(1);
        $user->sharedTasks()->attach(3, ['permission' => 'owner']);
    }
}
