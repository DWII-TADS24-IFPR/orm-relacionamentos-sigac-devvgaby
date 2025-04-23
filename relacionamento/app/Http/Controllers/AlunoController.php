<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
class AlunoController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome = $request->nome;
        $cpf = $request->cpf;
        $email = $request->email;
        $senha = $request->senha;
        $user_id = $request->user_id;
        $curso_id = $request->curso_id;
        $turma_id = $request->turma_id;

        $aluno = new Aluno();
        $aluno->nome = $nome;
        $aluno->cpf = $cpf;
        $aluno->email = $email;
        $aluno->senha = bcrypt($senha);
        $aluno->user_id = $user_id;
        $aluno->curso_id = $curso_id;
        $aluno->turma_id = $turma_id;

        $aluno->save();
    }

     /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
