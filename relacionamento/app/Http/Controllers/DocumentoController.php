<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
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
        $url = $request->url;
        $descricao = $request->descricao;
        $horas_in = $request->horas_in;
        $status = $request->status;
        $comentario = $request->comentario;
        $horas_out = $request->horas_out;
        $categoria_id = $request->categoria_id;
        $user_id = $request->user_id;

        $documento = new Documento();
        $documento->url = $url;
        $documento->descricao = $descricao;
        $documento->horas_in = $horas_in;
        $documento->status = $status;
        $documento->comentario = $comentario;
        $documento->horas_out = $horas_out;
        $documento->categoria_id = $categoria_id;
        $documento->user_id = $user_id;

        $documento->save();
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
