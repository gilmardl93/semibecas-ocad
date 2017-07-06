<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitante;
use App\Postulante;
use PDF;
use DB;
use Excel;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function download()
    {
        return view('admin.report');
    }
    
    public function TituloColumnas()
    {
        PDF::SetFont('Helvetica','B',12);
        PDF::SetXY(60,45);
        PDF::Cell(70,10,'PERSONAS QUE OBTENIERON SEMIBECA');
        PDF::SetFont('Helvetica','B',10);
        PDF::SetXY(25,65);
        PDF::Cell(10,10,'N°',1);
        PDF::SetXY(35,65);
        PDF::Cell(95,10,'SOLICITANTE',1);
        PDF::SetXY(130,65);
        PDF::Cell(20,10,'DNI',1);
        PDF::SetXY(150,65);
        PDF::Cell(30,10,'OTORGA',1);
        
    }

    public function PDFSemibeca()
    {
        $solicitantes = Solicitante::Semibeca()->with(['postulante'])->select(DB::raw('DISTINCT idpostulante,otorga'))->get();
        PDF::SetTitle('PERSONAS QUE OBTUVIERON SEMIBECA');
        PDF::SetAutoPageBreak(false);
        PDF::AddPage('R','A4');
        HeaderPDF();
        FooterPDF();
        
        $altodecelda=5;
        $incremento = 75;
        $numMaxLineas = 40;
        $x = 15;
        $y = 0;
        $i = 0;
        $this->TituloColumnas();
        foreach($solicitantes as $row):
            if($i%$numMaxLineas==0 && $i!=0){
                PDF::AddPage('R', 'A4');
                HeaderPDF();
                FooterPDF();
                $this->TituloColumnas();
                $y = 0;
            }
            
            #
            PDF::SetXY($x+10, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(10, $altodecelda, $i+1, 1);
            #
            PDF::SetXY($x+20, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(95,$altodecelda,$row->postulante->nombre_completo,1);
            #
            PDF::SetXY($x+115, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(20,$altodecelda,$row->postulante->numero_identificacion,1);
            #
            PDF::SetXY($x+135, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(30,$altodecelda,$row->otorga,1);

            $y++;
            $i++;
        endforeach;
        
        PDF::Output('RESULTADO_SEMIBECA.pdf');
    }

    public function PDFIntegral()
    {
        $solicitantes = Solicitante::Integral()->with(['postulante'])->select(DB::raw('DISTINCT idpostulante,otorga'))->get();
        PDF::SetTitle('PERSONAS QUE OBTUVIERON BECA INTEGRAL');
        PDF::SetAutoPageBreak(false);
        PDF::AddPage('R','A4');
        HeaderPDF();
        FooterPDF();
        
        $altodecelda=5;
        $incremento = 75;
        $numMaxLineas = 40;
        $x = 15;
        $y = 0;
        $i = 0;
        $this->TituloColumnas();
        foreach($solicitantes as $row):
            if($i%$numMaxLineas==0 && $i!=0){
                PDF::AddPage('R', 'A4');
                HeaderPDF();
                FooterPDF();
                $this->TituloColumnas();
                $y = 0;
            }
            
            #
            PDF::SetXY($x+10, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(10, $altodecelda, $i+1, 1);
            #
            PDF::SetXY($x+20, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(95,$altodecelda,$row->postulante->nombre_completo,1);
            #
            PDF::SetXY($x+115, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(20,$altodecelda,$row->postulante->numero_identificacion,1);
            #
            PDF::SetXY($x+135, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(30,$altodecelda,$row->otorga,1);

            $y++;
            $i++;
        endforeach;
        
        PDF::Output('RESULTADO_BECA_INTEGRAL.pdf');
    }

    public function PDFDenegado()
    {
        $solicitantes = Solicitante::Denegado()->with(['postulante'])->select(DB::raw('DISTINCT idpostulante,otorga'))->get();
        PDF::SetTitle('PERSONAS QUE LES DENEGARON LA SEMIBECA');
        PDF::SetAutoPageBreak(false);
        PDF::AddPage('R','A4');
        HeaderPDF();
        FooterPDF();
        
        $altodecelda=5;
        $incremento = 75;
        $numMaxLineas = 40;
        $x = 15;
        $y = 0;
        $i = 0;
        $this->TituloColumnas();
        foreach($solicitantes as $row):
            if($i%$numMaxLineas==0 && $i!=0){
                PDF::AddPage('R', 'A4');
                HeaderPDF();
                FooterPDF();
                $this->TituloColumnas();
                $y = 0;
            }
            
            #
            PDF::SetXY($x+10, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(10, $altodecelda, $i+1, 1);
            #
            PDF::SetXY($x+20, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(95,$altodecelda,$row->postulante->nombre_completo,1);
            #
            PDF::SetXY($x+115, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(20,$altodecelda,$row->postulante->numero_identificacion,1);
            #
            PDF::SetXY($x+135, $y*$altodecelda+$incremento);
            PDF::SetFont('helvetica', '', 10);
            PDF::Cell(30,$altodecelda,$row->otorga,1);

            $y++;
            $i++;
        endforeach;
        
        PDF::Output('RESULTADO_BECA_INTEGRAL.pdf');
    }

    public function ReportExcel()
    {
        Excel::create('Reporte General de Solicitantes de SEMIBECAS', function($excel){
            $excel->sheet('Lista General', function($sheet){
                
                $solicitantes = Postulante::select(DB::raw("DISTINCT postulante.fecha_registro,postulante.paterno AS PATERNO,postulante.materno AS MATERNO,postulante.nombres AS NOMBRES,postulante.numero_identificacion AS DNI,postulante.fecha_nacimiento,edad,s.nombre as SEXO,postulante.direccion AS DIRECCION,u.descripcion AS UBIGEO,postulante.direccion as DIRECCION,telefono_fijo AS TELEFONO,postulante.telefono_celular AS CELULAR,postulante.email AS EMAIL,c.nombre as COLEGIO,c.gestion AS GESTION,so.promedio AS PROMEDIO,case when so.cepreuni then 'si' else 'no' end as CEPREUNI,ac.nombre AS ACADEMIA,so.otorga AS OTORGA,so.observaciones AS OBSERVACIONES"))
                                ->join('colegio as c', 'c.id', '=', 'postulante.idcolegio')
                                ->join('catalogo as s', 's.id', '=', 'postulante.idsexo')
                                ->join('complementario as co', 'co.idpostulante', '=','postulante.id')
                                ->join('catalogo as ac','ac.id','=','co.idacademia')
                                ->join('ubigeo as u','u.id','=','postulante.idubigeo')
                                ->join('Semibecas.solicitantes as so', 'so.idpostulante', '=', 'postulante.id')
                                ->get();

                $sheet->fromArray($solicitantes);
                /*
                    Postulante::select(DB::raw('postulante.materno AS MATERNO','postulante.nombres AS NOMBRES','postulante.numero_identificacion AS DNI',
                                                    'postulante.fecha_nacimiento','edad','s.nombre as SEXO',
                                                    'postulante.direccion AS DIRECCION','u.descripcion AS UBIGEO DIRECCION','telefono_fijo AS TELEFONO','postulante.telefono_celular AS CELULAR','postulante.email AS EMAIL',
                                                    'c.nombre as COLEGIO','c.gestion AS GESTION','so.promedio AS PROMEDIO',DB::raw("case when so.cepreuni then 'si' else 'no' end as CEPREUNI"),
                                                    'ac.nombre AS ACADEMIA','so.otorga AS OTORGA','so.observaciones AS OBSERVACIONES'))
                                
                */
            });
        })->export('xls');
    }
}
