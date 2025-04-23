<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Curso;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('nome', 'Aluno')->first();
        $curso = Curso::first(); // curso inform para internet

        User::create([
            'nome' => 'João da Silva',
            'email' => 'joao@example.com',
            'senha' => bcrypt('senha123'),
            'role_id' => $role->id,
            'curso_id' => $curso->id,
        ]);
    }
}
