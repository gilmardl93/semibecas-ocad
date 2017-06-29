<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Document;

class DocumentController extends Controller
{
    public function load1(Request $request)
    {
        $file = $request->file('carga1');
        $nombre = Auth::user()->dni.'-'.date("Y-m-d-h-i-s").'-1.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        if(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "jpg" || pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "png")
        {
            $request->file('carga1')->move('documentos',$nombre);
            $data = new Document();
            $data->dni = Auth::user()->dni;
            $data->documento = $nombre;
            $data->tipo     = 1; 
            $data->save();
            echo 1;
        }else
        {
            echo 0;
        }
    }

    public function load2(Request $request)
    {
        $file = $request->file('carga2');
        $nombre = Auth::user()->dni.'-'.date("Y-m-d-h-i-s").'-2.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        if(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "jpg" || pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "png")
        {
            $request->file('carga2')->move('documentos',$nombre);
            $data = new Document();
            $data->dni = Auth::user()->dni;
            $data->documento = $nombre;
            $data->tipo     = 2; 
            $data->save();
            echo 1;
        }else
        {
            echo 0;
        }
    }
    
    public function load3(Request $request)
    {
        $file = $request->file('carga3');
        $nombre = Auth::user()->dni.'-'.date("Y-m-d-h-i-s").'-3.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        if(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "jpg" || pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "png")
        {
            $request->file('carga3')->move('documentos',$nombre);
            $data = new Document();
            $data->dni = Auth::user()->dni;
            $data->documento = $nombre;
            $data->tipo     = 3; 
            $data->save();
            echo 1;
        }else
        {
            echo 0;
        }
    }
    
    public function load4(Request $request)
    {
        $file = $request->file('carga4');
        $nombre = Auth::user()->dni.'-'.date("Y-m-d-h-i-s").'-4.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        if(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "jpg" || pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "png")
        {
            $request->file('carga4')->move('documentos',$nombre);
            $data = new Document();
            $data->dni = Auth::user()->dni;
            $data->documento = $nombre;
            $data->tipo     = 4; 
            $data->save();
            echo 1;
        }else
        {
            echo 0;
        }
    }
    
    public function load5(Request $request)
    {
        $file = $request->file('carga5');
        $nombre = Auth::user()->dni.'-'.date("Y-m-d-h-i-s").'-5.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        if(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "jpg" || pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "png")
        {
            $request->file('carga5')->move('documentos',$nombre);
            $data = new Document();
            $data->dni = Auth::user()->dni;
            $data->documento = $nombre;
            $data->tipo     = 5; 
            $data->save();
            echo 1;
        }else
        {
            echo 0;
        }
    }
    
    public function load6(Request $request)
    {
        $file = $request->file('carga6');
        $nombre = Auth::user()->dni.'-'.date("Y-m-d-h-i-s").'-6.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        if(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "jpg" || pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "png")
        {
            $request->file('carga6')->move('documentos',$nombre);
            $data = new Document();
            $data->dni = Auth::user()->dni;
            $data->documento = $nombre;
            $data->tipo     = 6; 
            $data->save();
            echo 1;
        }else
        {
            echo 0;
        }
    }
    
    public function load7(Request $request)
    {
        $file = $request->file('carga7');
        $nombre = Auth::user()->dni.'-'.date("Y-m-d-h-i-s").'-7.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        if(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "jpg" || pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) == "png")
        {
            $request->file('carga7')->move('documentos',$nombre);
            $data = new Document();
            $data->dni = Auth::user()->dni;
            $data->documento = $nombre;
            $data->tipo     = 7; 
            $data->save();
            echo 1;
        }else
        {
            echo 0;
        }
    }

    public function documents(Request $request)
    {
        $documentos = Document::Validar($request->dni)->Activo()->with('tipos')->get();
        return view('document.uploaded',['documentos' => $documentos]);
    }

    public function delete(Request $request)
    {
        Document::where('id',$request->id)->delete();

        return redirect('dashboard');
    }
    
}
