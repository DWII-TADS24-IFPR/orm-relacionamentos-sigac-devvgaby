<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Nivel;
use App\Models\Eixo;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nivel = Nivel::first(); // nível Técnico
        $eixo = Eixo::first();   // eixo Informática

        Curso::create([
            'nome' => 'Informática para Internet',
            'sigla' => 'INF',
            'total_horas' => 1200,
            'nivel_id' => $nivel->id,
            'eixo_id' => $eixo->id,
        ]);
    }
}
