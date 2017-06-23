<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "Semibecas.documents";
    
    public function getContarAttribute()
    {
        return count($this->document);
    }
}
