<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table = "modalidad";

    public function postulante()
    {
        return $this->belongsTo(Postulante::class, 'id', 'idpostulante');
    }
}
