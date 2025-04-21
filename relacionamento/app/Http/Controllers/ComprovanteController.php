<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comprovante;
class ComprovanteController extends Controller
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
        $horas = $request->horas;
        $atividade = $request->atividade;
        $categoria_id = $request->categoria_id;
        $aluno_id = $request->aluno_id;
        $user_id = $request->user_id;

        $comprovante = new Comprovante();
        $comprovante->horas = $horas;
        $comprovante->atividade = $atividade;
        $comprovante->categoria_id = $categoria_id;
        $comprovante->aluno_id = $aluno_id;
        $comprovante->user_id = $user_id;

        $comprovante->save();
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
