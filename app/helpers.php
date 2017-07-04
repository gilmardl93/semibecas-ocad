<?php

    function HeaderPDF()
    {
        PDF::Image('logo-uni.jpg', 15, null, 25, null);
        PDF::SetXY(42,10);
        PDF::SetFont('Helvetica','B',18);
        PDF::Cell(50,10,'UNIVERSIDAD NACIONAL DE INGENIERÍA');
        PDF::SetXY(42,20);
        PDF::SetFont('Helvetica','B',18);
        PDF::Cell(50,10,'OFICINA CENTRAL DE ADMISIÓN');
        PDF::SetFont('Helvetica','B',15);
        PDF::SetXY(42,30);
        PDF::Cell(100,10,'CONCURSO DE ADMISIÓN 2017-2');
    }

    function FooterPDF()
    {
        PDF::SetY(-15);
        PDF::SetFont('helvetica', 'I', 8);
        PDF::Cell(0, 10, 'Pagina '.PDF::getAliasNumPage().'/'.PDF::getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }

?>