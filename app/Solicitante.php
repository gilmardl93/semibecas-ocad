<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table  = "Semibecas.solicitantes";

    public function scopeValidar($cadenaSQL, $id)
    {
        return $cadenaSQL->where('idpostulante', $id);
    }
}
