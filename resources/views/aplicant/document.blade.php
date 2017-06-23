@extends('layouts.layout')
@section('content')
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Panel de Control</a>
                                </li>
                            </ul>
                        </div>
                        <br>
                        @foreach($recaudacion as $row)
                        @if($row->codigo != Auth::user()->dni)
                        <div class="note note-danger">
                            <h3>Usted aun no ha realizado su pago</h3>
                            <p> Debe realizar el pago de su para que pueda cargar sus documentos. </p>
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
                                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
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
                                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                                    <div class="visual">
                                                        <i class="fa fa-comments"></i>
                                                    </div>
                                                    <div class="details">
                                                        <div class="number">
                                                            <span data-counter="counterup" data-value=""></span>
                                                        </div>
                                                        <div class="desc"> FICHA SOCIO ECONOMICA INGRESOS</div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
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
                            @endforeach
                        </div>
                    </div>
                </div>
@endsection