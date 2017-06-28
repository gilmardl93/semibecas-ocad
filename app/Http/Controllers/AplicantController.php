<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Solicitante;

class AplicantController extends Controller
{
    public function save(Request $request)
    {
        $this->validate($request, [
            'promedio' => 'required',
            'observaciones' => 'required',
            'cepreuni' => 'required'
        ]);

        $data = Solicitante::where('idpostulante',$request->idpostulante)->update([
            'promedio' => $request->promedio,
            'observaciones' => $request->observaciones,
            'otorga' => $request->otorga,
            'cepreuni' => $request->cepreuni,
            'proceso' => "CONCURSO DE ADMISION 2017-2",
            'iduser' => $request->iduser
        ]);

        return Redirect('admin');
    }
}
