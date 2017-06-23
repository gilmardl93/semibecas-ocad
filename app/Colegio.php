<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $table = "colegio";

    public function postulante()
    {
        return $this->belongsTo(Postulante::class, 'id', 'idpostulante');
    }
}
