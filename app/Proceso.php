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
    
    public function scopeValidar($cadenaSQL, $id)
    {
        return $cadenaSQL->where('preinscripcion',1)
                        ->where('datos_personales',1)
                        ->where('datos_familiares',1)
                        ->where('encuesta',1)
                        ->where('idpostulante',$id);
    }
}
