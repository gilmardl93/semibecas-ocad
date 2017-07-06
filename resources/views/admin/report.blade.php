@extends('layouts.layout')
@section('admin')
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="">Panel de Control</a>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">DESCARGAR REPORTES</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 blue" target="_lblank" href="{!! url('PDFsemibeca') !!}">
                                                    <div class="visual">
                                                        <i class="fa fa-file-pdf-o"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> SOLICITANTES QUE OBTENIERON SEMIBECA </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 yellow" target="_lblank" href="{!! url('PDFintegral') !!}">
                                                    <div class="visual">
                                                        <i class="fa fa-file-pdf-o"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> SOLICITANTES QUE OBTENIERON BECA INTEGRAL </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 red" target="_lblank" href="{!! url('PDFdenegado') !!}">
                                                    <div class="visual">
                                                        <i class="fa fa-file-pdf-o"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> SOLICITANTES QUE LES DENEGARON LA SEMIBECA</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 green" href="{!! url('reportExcel') !!}">
                                                    <div class="visual">
                                                        <i class="fa fa-file-excel-o"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> DESCARGAR REPORTE GENERAL EXCEL </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection