<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;
use App\Models\User;
use App\Models\Curso;
use App\Models\Turma;
class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); //joao
        $curso = Curso::first(); // info para internet
        $turma = Turma::first(); // 2024

        Aluno::create([
            'nome' => 'João da Silva',
            'cpf' => '12345678900',
            'email' => 'joao@example.com',
            'senha' => bcrypt('senha123'),
            'user_id' => $user->id,
            'curso_id' => $curso->id,
            'turma_id' => $turma->id,
        ]);
    }
}
