<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Declaracao;
use App\Models\Aluno;
use App\Models\Comprovante;
use Illuminate\Support\Str;
class DeclaracaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aluno = Aluno::first();
        $comprovante = Comprovante::first();

        Declaracao::create([
            'hash' => Str::uuid(),
            'data' => now(),
            'aluno_id' => $aluno->id,
            'comprovante_id' => $comprovante->id,
        ]);
    }
}
