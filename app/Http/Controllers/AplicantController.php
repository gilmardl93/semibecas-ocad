<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\Validation\Validator;
use App\Solicitante;

class AplicantController extends Controller
{
    public function save(Request $request)
    {
        
        $data = Solicitante::where('idpostulante',$request->idpostulante)->update([
            'promedio' => $request->promedio,
            'observaciones' => $request->observaciones,
            'otorga' => $request->otorga,
            'proceso' => "CONCURSO DE ADMISION 2017-2",
            'iduser' => $request->iduser
        ]);

        return Redirect('admin');
    }
}
