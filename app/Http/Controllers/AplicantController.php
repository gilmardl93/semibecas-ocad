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

        
        if($request->otorga == 'BECA INTEGRAL')
        {
            $tipo_descuento =  'Total';
        }else if($request->otorga == 'SEMIBECA')
        {
            $tipo_descuento =  'Parcial';
        }else if($request->otorga == 'DENEGADO')
        {
            $tipo_descuento = '';
        }

        $data = Solicitante::where('idpostulante',$request->idpostulante)->update([
            'promedio' => $request->promedio,
            'observaciones' => $request->observaciones,
            'otorga' => $request->otorga,
            'cepreuni' => $request->cepreuni,
            'proceso' => "CONCURSO DE ADMISION 2017-2",
            'gestion'   => $request->gestion,
            'dni'   => $request->dni,
            'tipo_descuento' => $tipo_descuento,
            'iduser' => $request->iduser
        ]);

        return Redirect('admin');
    }
}
