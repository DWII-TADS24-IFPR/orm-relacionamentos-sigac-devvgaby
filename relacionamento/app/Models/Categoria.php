<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comprovante;
use App\Models\Documento;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $fillable = ['nome', 'maximo_horas', 'curso_id'];

    public function comprovantes()
    {
        return $this->hasMany(Comprovante::class);
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

}
