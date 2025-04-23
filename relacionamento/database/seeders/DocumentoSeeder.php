<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Documento;
use App\Models\Categoria;
use App\Models\User;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = Categoria::first(); // Atividades Complementares
        $user = User::first(); // Joao

        Documento::create([
            'url' => 'documento.pdf',
            'descricao' => 'Certificado de participação',
            'horas_in' => 10,
            'status' => 'pendente',
            'comentario' => null,
            'horas_out' => 0,
            'categoria_id' => $categoria->id,
            'user_id' => $user->id,
        ]);
    }
}
