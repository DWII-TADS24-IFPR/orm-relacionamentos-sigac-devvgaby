<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comprovante;
use App\Models\Aluno;
use App\Models\Categoria;
use App\Models\User;
class ComprovanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aluno = Aluno::first(); // Joao
        $categoria = Categoria::first(); // Atividades Complementares
        $user = User::first(); 

        Comprovante::create([
            'horas' => 5,
            'atividade' => 'Palestra sobre tecnologia',
            'categoria_id' => $categoria->id,
            'aluno_id' => $aluno->id,
            'user_id' => $user->id,
        ]);
    }
}
