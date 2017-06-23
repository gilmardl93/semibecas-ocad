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
        $nombre = Auth::user()->id.'-'.date("Y-m-d-h-i-s").'-1.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $request->file('carga1')->move('documentos',$nombre);
        $data = new Document();
        $data->userid = Auth::user()->id;
        $data->documento = $nombre;
        $data->tipo     = 1; 
        $data->save();
    }

    public function load2(Request $request)
    {
        $file = $request->file('carga2');
        $nombre = Auth::user()->id.'-'.date("Y-m-d-h-i-s").'-2.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $request->file('carga2')->move('documentos',$nombre);
        $data = new Document();
        $data->userid = Auth::user()->id;
        $data->documento = $nombre;
        $data->tipo     = 2; 
        $data->save();
    }
    
    public function load3(Request $request)
    {
        $file = $request->file('carga3');
        $nombre = Auth::user()->id.'-'.date("Y-m-d-h-i-s").'-3.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $request->file('carga3')->move('documentos',$nombre);
        $data = new Document();
        $data->userid = Auth::user()->id;
        $data->documento = $nombre;
        $data->tipo     = 3; 
        $data->save();
    }
    
    public function load4(Request $request)
    {
        $file = $request->file('carga4');
        $nombre = Auth::user()->id.'-'.date("Y-m-d-h-i-s").'-4.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $request->file('carga4')->move('documentos',$nombre);
        $data = new Document();
        $data->userid = Auth::user()->id;
        $data->documento = $nombre;
        $data->tipo     = 4; 
        $data->save();
    }
    
    public function load5(Request $request)
    {
        $file = $request->file('carga5');
        $nombre = Auth::user()->id.'-'.date("Y-m-d-h-i-s").'-5.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $request->file('carga5')->move('documentos',$nombre);
        $data = new Document();
        $data->userid = Auth::user()->id;
        $data->documento = $nombre;
        $data->tipo     = 5; 
        $data->save();
    }
    
    public function load6(Request $request)
    {
        $file = $request->file('carga6');
        $nombre = Auth::user()->id.'-'.date("Y-m-d-h-i-s").'-6.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $request->file('carga6')->move('documentos',$nombre);
        $data = new Document();
        $data->userid = Auth::user()->id;
        $data->documento = $nombre;
        $data->tipo     = 6; 
        $data->save();
    }
    
    public function load7(Request $request)
    {
        $file = $request->file('carga7');
        $nombre = Auth::user()->id.'-'.date("Y-m-d-h-i-s").'-7.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $request->file('carga7')->move('documentos',$nombre);
        $data = new Document();
        $data->userid = Auth::user()->id;
        $data->documento = $nombre;
        $data->tipo     = 7; 
        $data->save();
    }
}
