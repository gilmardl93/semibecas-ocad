<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Postulante extends Model
{
    protected $table = "postulante";

    public function recaudacion()
    {       
        return $this->hasMany(Recaudacion::class,'id','idpostulante');
    }

    public function proceso()
    {
        return $this->hasOne(Proceso::class,'id','idpostulante');
    }

    public function modalidad()
    {
        return $this->hasOne(Modalidad::class, 'id', 'idmodalidad');
    }

    public function especialidad()
    {
        return $this->hasOne(Especialidad::class, 'id', 'idespecialidad');
    }

    public function colegio()
    {
        return $this->hasOne(Colegio::class, 'id', 'idcolegio');
    }

    public function scopeValidarDNI($cadenaSQL, $dni)
    {
        return $cadenaSQL->where('numero_identificacion',$dni);
    }
}
