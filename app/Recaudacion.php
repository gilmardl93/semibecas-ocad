<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recaudacion extends Model
{
    protected $table = "recaudacion";
    
    public function postulante()
    {
        return $this->belongsTo(Postulante::class,'idpostulante','id');
    }

    public function solicitante()
    {
        return $this->hasOne(Solicitante::class,'idpostulante','idpostulante');
    }

    public function scopeValidarPagoSEMIBECA($cadenaSQL)
    {
        return $cadenaSQL->where('monto','5.000');
    }

    public function scopeExistePago($cadenaSQL, $dni)
    {
        return $cadenaSQL->where('codigo', $dni)
                        ->where('monto','<>','90.000')
                        ->where('monto','<>','5.000');
    }
}
