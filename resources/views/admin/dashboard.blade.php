@extends('layouts.layout')

@section('admin')
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Panel de Control</a>
                                </li>
                            </ul>
                        </div>

                        <h1 class="page-title"> LISTADO DE SOLICITANTES 
                        </h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">CARGAR DOCUMENTOS</span>
                                        </div>
                                    </div>
                                    <div id="aplicant-lists"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
@endsection