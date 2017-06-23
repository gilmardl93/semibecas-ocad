<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Document;
use App\Postulante;
use App\Recaudacion;
use App\Proceso;
use App\Solicitante;
use PDF;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $data = new User();
        $data->dni      = $request->dni;
        $data->password = bcrypt($request->password);
        $data->nombres  = strtoupper($request->nombres);
        $data->paterno  = strtoupper($request->paterno);
        $data->materno  = strtoupper($request->materno);
        $data->celular  = $request->celular;
        $data->email    = $request->email;
        $data->tipo     = "SOLICITANTE";
        $data->save();
    }

    public function edit()
    {
        $users = User::where('id', Auth::user()->id)->get();
        return view('user.edit',['users' => $users]);
    }

    public function update(Request $request)
    {
        User::where('id', Auth::user()->id)->update([
            'nombres' => $request->nombres,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'celular' => $request->celular,
            'email'   => $request->email
        ]);
    }

    public function editPassword()
    {
        $users = User::where('id', Auth::user()->id)->get();
        return view('auth.password',['users' => $users]);
    }

    public function updatePassword(Request $request)
    {
        User::where('id', Auth::user()->id)->update([
            'password' => bcrypt($request->password)
        ]);
    }

    public function authenticate(Request $request)
    {
        $rol = User::Rol($request->dni)->select('idrole')->get();
        dd($rol);/*
        $ObtenerID = Postulante::ValidarDNI($request->dni)->select('id')->get();
        foreach($ObtenerID  as $row):
            $ValidarProceso = Proceso::Validar($row->id)->get();
            foreach($ValidarProceso as $row2):
                $ValidarSolicitante = Solicitante::Validar($row->id)->get();
                if ($ValidarSolicitante) 
                {
                    $data = new Solicitante();
                    $data->idpostulante = $row->id;
                    $data->save();
                    if (Auth::attempt(['dni' => $request->dni, 'password' => $request->password, 'idrole' => 83])) {
                        echo 1;
                    }else 
                    {
                        echo 0;
                    }
                }else 
                {
                    if (Auth::attempt(['dni' => $request->dni, 'password' => $request->password, 'idrole' => 83])) {
                        echo 1;
                    }else 
                    {
                        echo 0;
                    }
                }
            endforeach;
        endforeach;*/
        
    }
    
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function PDFreceipt()
    {
        return view('receipt.receipt');
    }

    public function receipt()
    {
        $postulante = Postulante::where('numero_identificacion', Auth::user()->id)->get();
        foreach($postulante as $row):
        PDF::AddPage("L","A5");
        PDF::Image('logo-uni.jpg', 15, null, 25, null);
        PDF::setFont('Helvetica','',24);
        PDF::setXY(60,20);        
        PDF::Cell(60,10,"FORMATO DE PAGO");
        PDF::setFont('Helvetica','',12);
        PDF::setXY(30,50);
        PDF::Cell(60,10,"CUENTA",1,0,"R");
        PDF::setXY(90,50);
        PDF::Cell(100,10,"ADMISIÓN UNI",1);
        PDF::setXY(30,60);
        PDF::Cell(60,10,"CONCEPTO",1,0,"R");
        PDF::setXY(90,60);
        PDF::Cell(100,10,"521 - FORMATO DE SOLICITUD DE SEMIBECA",1);
        PDF::setXY(30,70);
        PDF::Cell(60,10,"DNI",1,0,"R");
        PDF::setXY(90,70);
        PDF::Cell(100,10,$row->dni,1);
        PDF::setXY(30,80);
        PDF::Cell(60,10,"DATOS",1,0,"R");
        PDF::setXY(90,80);
        PDF::Cell(100,10,$row->paterno.' '.$row->materno.' '.$row->nombres,1);
        PDF::setXY(30,90);
        PDF::Cell(60,10,"IMPORTE",1,0,"R");
        PDF::setXY(90,90);
        PDF::Cell(100,10,"S/. 5.00",1);
        PDF::setXY(30,100);
        PDF::Cell(100,10,"INSTRUCCIONES PARA EL SOLICITANTE");
        PDF::setXY(30,110);
        PDF::Cell(100,10,"1. Verificar que los datos registrados en la parte superior sean los correctos.");
        PDF::setXY(30,115);
        PDF::Cell(100,10,"2. Verificar que el nombre sea del solicitante no del apoderado o de quien pague.");
        endforeach;
        ob_end_clean();
        PDF::Output('RECIBO_SEMIBECA_5_SOLES.pdf');
    }

    public function dashboard()
    {
        $recaudacion = Recaudacion::where('codigo', Auth::user()->dni)->get();
        return view('aplicant.dashboard',['recaudacion' => $recaudacion]);
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
    
    public function document()
    {
        $recaudacion = Recaudacion::where('codigo', Auth::user()->dni)->get();
        return view('aplicant.document', ['recaudacion' => $recaudacion]);
    }

    public function aplicant()
    {
        $solicitantes = Proceso::Validar()->with('postulante')->get();
        return view('aplicant.lists', compact('solicitantes'));
    }
    
    public function aplicantdata(Request $request)
    {
        $data = Postulante::ValidarDNI($request->dni)->with(['especialidad','modalidad','colegio'])->get();
        return view('aplicant.data', compact('data'));
    }

}
