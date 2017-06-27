<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "Semibecas.documentos";
    
    public function tipos()
    {
        return $this->hasOne(Tipo::class,'id','tipo');
    }

    public function scopeValidar($cadenaSQL, $data)
    {
        return $cadenaSQL->where('userid',$data);
    }

    public function scopeActivo($cadenaSQL)
    {
        return $cadenaSQL->where('activo',true);
    }
}
