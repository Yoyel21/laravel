<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table('tasks')->insert([
            'title' => 'Tarea 1',
            'description' => 'Ejemplo 1'
        ]);
    }
}
