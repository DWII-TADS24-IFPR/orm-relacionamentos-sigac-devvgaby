<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Turma;
use App\Models\Curso;
class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = Curso::first(); // curso Informatica para internet

        Turma::create([
            'ano' => 2024,
            'curso_id' => $curso->id,
        ]);
    }
}
