<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "Semibecas.documentos";
    
    public function getContarAttribute()
    {
        return count($this->document);
    }
}
