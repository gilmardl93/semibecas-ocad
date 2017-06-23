<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = "proceso";

    public function postulante()
    {
        return $this->belongsTo(Postulante::class,'idpostulante','id');
    }
    
    public function scopeValidar($cadenaSQL)
    {
        return $cadenaSQL->where('preinscripcion',true)
                        ->where('datos_personales',true)
                        ->where('datos_familiares',true)
                        ->where('encuesta',true);
    }
}
