<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recaudacion extends Model
{
    protected $table = "recaudacion";
    
    public function postulante()
    {
        return $this->belongsTo(Postulante::class,'id','idpostulante');
    }
}
