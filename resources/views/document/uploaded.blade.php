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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">DOCUMENTOS CARGADOS</span>
                                            <a href="{!! url('dashboard') !!}" class="btn btn-danger">ATRAS</a>
                                        </div>
                                    </div>
                                    <div class="portlet light form-fit bordered">
                            <div class="portlet-body form">
                                <div class="row">
                                    <h2><b>DOCUMENTOS CARGADOS</b></h2>
                                    @foreach($documentos as $row2)
                                    <div class="col-md-4">
                                        <div class="cbp-l-caption-title"><b>{!! $row2->tipos->descripcion !!}</b></div>
                                    <a href="{!! url('delete-document/'.$row2->id )!!}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                        <div class="cbp-item identity logos">
                                            <a href="../documentos/{!! $row2->documento !!}" class="cbp-caption cbp-lightbox">
                                                <div class="cbp-caption-defaultWrap">
                                                    <img src="../documentos/{!! $row2->documento !!}" alt="" width="200" height="200"> </div>
                                                <div class="cbp-caption-activeWrap">
                                                    <div class="cbp-l-caption-alignLeft">
                                                        <div class="cbp-l-caption-body">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
@endsection