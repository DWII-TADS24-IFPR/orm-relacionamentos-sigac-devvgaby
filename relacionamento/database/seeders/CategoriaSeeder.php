<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Curso;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = Curso::first(); // info para net

        Categoria::create([
            'nome' => 'Atividades Complementares',
            'maximo_horas' => 120,
            'curso_id' => $curso->id,
        ]);
    }
}
