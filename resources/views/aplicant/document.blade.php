@extends('layouts.layout')
@section('content')
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
                        @if(count($recaudacion) == 0)
                        <div class="note note-danger">
                            <h3>Usted aún no ha realizado su pago</h3>
                            <p> Debe realizar su pago para que pueda cargar sus documentos. </p>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-md-12">

                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">DESCARGAR DOCUMENTOS</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 blue" target="_lblank" href="{!! asset('DECLARACION_JURADA_SIMPLE_DE_INGRESOS_2017-2.pdf') !!}">
                                                    <div class="visual">
                                                        <i class="fa fa-comments"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> DECLARACION SIMPLE JURADA DE INGRESOS </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 blue" target="_lblank" href="{!! asset('FICHA_SOCIO_ECONOMICA_SEMIBECA_2017_2.pdf') !!}">
                                                    <div class="visual">
                                                        <i class="fa fa-comments"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> FICHA SOCIO ECONOMICA </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 blue" target="_lblank" href="{!! asset('INGRESOS_Y_EGRESOS_ECONOMICOS_SEMIBECA_2017_2.pdf') !!}">
                                                    <div class="visual">
                                                        <i class="fa fa-comments"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> FICHA SOCIO ECONOMICA EGRESOS</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
@endsection