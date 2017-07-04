<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitante;
use PDF;

class ReportController extends Controller
{
    public function PDFSemibeca()
    {
        $i = 1;
        $solicitantes = Solicitante::Semibeca()->with(['postulante'])->get();
        PDF::AddPage('R','A4');
        HeaderPDF();
        PDF::SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        PDF::SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        PDF::SetHeaderMargin(PDF_MARGIN_HEADER);
        PDF::SetFooterMargin(PDF_MARGIN_FOOTER);
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::SetFont('Helvetica','B',12);
        PDF::SetXY(60,45);
        PDF::Cell(70,10,'PERSONAS QUE OBTUVIERON SEMIBECA');
        PDF::SetFont('Helvetica','B',10);
        PDF::SetXY(25,55);
        PDF::Cell(10,10,'N°',1);
        PDF::SetXY(35,55);
        PDF::Cell(95,10,'SOLICITANTE',1);
        PDF::SetXY(130,55);
        PDF::Cell(20,10,'DNI',1);
        PDF::SetXY(150,55);
        PDF::Cell(30,10,'OTORGA',1);
        PDF::SetFont('Helvetica','N',10);
        PDF::SetXY(10,65);
        foreach($solicitantes as $row):
        PDF::SetFontSize(10);
        PDF::SetX(25);
        PDF::Cell(10,10,$i++,1);
        PDF::SetX(35);
        PDF::Cell(95,10,$row->postulante->paterno.' '. $row->postulante->materno.' '. $row->postulante->nombres,1);
        PDF::SetX(130);
        PDF::Cell(20,10,$row->postulante->numero_identificacion,1);
        PDF::SetX(150);
        PDF::Cell(30,10,$row->otorga,1);
        PDF::Ln();
        endforeach;
        FooterPDF();
        PDF::Output('RESULTADO_SEMIBECA.pdf');
    }
}
