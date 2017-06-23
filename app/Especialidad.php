<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = "especialidad";

    public function postulante()
    {
        return $this->belongsTo(Postulante::class, 'id', 'idespecialidad');
    }
}
