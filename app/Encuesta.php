<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = "complementario";

    public function razon()
    {
        return $this->hasOne(Catalogo::class,'id','idrazon');
    }

    public function preparacion()
    {
        return $this->hasOne(Catalogo::class,'id','idtipopreparacion');
    }

    public function academia()
    {
        return $this->hasOne(Catalogo::class,'id','idacademia');
    }

    public function renuncia()
    {
        return $this->hasOne(Catalogo::class,'id','idrenuncia');
    }

    public function ingreso()
    {
        return $this->hasOne(Catalogo::class,'id','idingresoeconomico');
    }
}
