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

    public function postulante()
    {
        return $this->hasOne(Postulante::class,'id','idpostulante');
    }
    
    public function recaudacion()
    {
        return $this->hasOne(Recaudacion::class,'idpostulante','idpostulante');
    }

    public function scopeInconcluso($cadenaSQL)
    {
        return $cadenaSQL->where('iduser','')
                        ->where('observaciones','')
                        ->where('promedio','')
                        ->where('otorga','');
    }
}
