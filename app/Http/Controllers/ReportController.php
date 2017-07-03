<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitante;
use PDF;

class ReportController extends Controller
{
    public function PDFSemibeca()
    {
        $solicitantes = Solicitante::Semibeca()->get();
        dd($solicitantes->toArray());
        PDF::AddPage('R','A4');
        PDF::Image('logo-uni.jpg', 15, null, 25, null);
        PDF::SetXY(42,10);
        PDF::SetFontSize(20);
        PDF::Cell(50,10,'UNIVERSIDAD NACIONAL DE INGENIERÍA');
        PDF::SetXY(42,20);
        PDF::SetFontSize(20);
        PDF::Cell(50,10,'OFICINA CENTRAL DE ADMISIÓN');
        foreach($solicitantes as $row):
        PDF::SetX(10);
        PDF::SetFontSize(14);
        PDF::Cell(50,10,$row->paterno.' '. $row->materno.' '. $row->nombres);
        PDF::Ln();
        endforeach;
        ob_end_clean();
        PDF::Output('RESULTADO_SEMIBECA.pdf');
    }
}
