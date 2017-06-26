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
                        <br>
                        <div class="portlet light form-fit bordered">
                            <div class="portlet-body form">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h2>DATOS DEL SOLICITANTE</h2>
                                    @foreach($data as $row)
                                    
                                       DNI     : {!! $row->numero_identificacion !!}<br>
                                       PATERNO: {!! $row->paterno !!}<br>
                                       MATERNO: {!! $row->materno !!}<br>
                                       NOMBRES: {!! $row->nombres !!}<br>
                                       DIRECCION: {!! $row->direccion !!}<br>
                                       

                                       ESPECIALIDAD : {!! $row->especialidad->nombre !!}<br>
                                       MODALIDAD : {!! $row->modalidad->nombre !!}
                                       <p></p>
                                       <div class="row">
                                            <div class="col-md-12">
                                            {!! Form::open(['id' => 'FrmAdd']) !!}
                                                <input type="hidden" name="idpostulante" id="idpostulante" value="{!! $row->id !!}" >
                                                <input type="hidden" name="iduser" id="iduser" value="{!! Auth::user()->id !!}" >
                                                <div class="form-group">
                                                    {!! Form::label('PROMEDIO DE NOTA') !!}
                                                    {!! Form::text('promedio',null,['id' => 'promedio', 'class' => 'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('OBSERVACIONES') !!}
                                                    {!! Form::text('observaciones',null,['id' => 'observaciones', 'class' => 'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('OTORGA') !!}
                                                    {!! Form::select('otorga',['SELECCIONE' => 'SELECCIONE', 'SEMIBECA' => 'SEMIBECA', 'BECA INTEGRAL' => 'BECA INTEGRAL', 'DENEGADO' => 'DENEGADO'],null,['class' => 'form-control', 'id' => 'otorga']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::submit('GUARDAR',['class' => 'btn btn-primary']) !!}
                                                </div>

                                            {!! Form::close() !!}
                                            </div>
                                        </div>
                                        <a id="example1" href="../documentos/23-2017-06-26-08-28-17-1.png"><img alt="example1" src="../documentos/23-2017-06-26-08-28-17-1.png"></a>
                                       
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
@endsection
