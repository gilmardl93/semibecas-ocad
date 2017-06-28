@extends('layouts.layout')
{!! Html::style('assets/pages/css/portfolio.min.css') !!}
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
                        <div class="portlet light form-fit bordered">
                            <div class="portlet-body form">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h2><b>DATOS DEL SOLICITANTE</b></h2>
                                    <div class="row">
                                    @foreach($familiar as $row2)
                                        <div class="col-md-4">
                                        <b>DNI    :</b> {!! $row2->dni !!}<br>
                                        <b>PATERNO:</b> {!! $row2->paterno !!}<br>
                                        <b>MATERNO:</b> {!! $row2->materno !!}<br>
                                        <b>NOMBRES:</b> {!! $row2->nombres !!}<br>
                                        <b>PARENTESCO:</b> {!! $row2->parentesco !!}<br>
                                        <p></p>
                                        </div>
                                    @endforeach
                                    </div>
                                    <div class="row">
                                        @foreach($encuesta as $row3)
                                        <div class="col-md-6">
                                        <b>N° DE VECES QUE POSTULO    :</b> {!! $row3->numeroveces !!}<br>
                                        <b>INGRESO ECONOMICO:</b> {!! $row3->ingreso->nombre !!}<br>
                                        <b>PREPARACION:</b> {!! $row3->preparacion->nombre !!}<br>
                                        <b>ACADEMIA:</b> {!! $row3->academia->nombre !!}<br>
                                        <b>RAZON POR LA QUE POSTULA:</b> {!! $row3->razon->nombre !!}<br>
                                        <p></p>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                    @foreach($data as $row)
                                        <div class="col-md-12">
                                       <b>DNI    :</b> {!! $row->numero_identificacion !!}<br>
                                       <b>PATERNO:</b> {!! $row->paterno !!}<br>
                                       <b>MATERNO:</b> {!! $row->materno !!}<br>
                                       <b>NOMBRES:</b> {!! $row->nombres !!}<br>
                                       <b>DIRECCION:</b> {!! $row->direccion !!}<br>


                                       <b>INSTITUCION EDUCATIVA :</b> {!! $row->colegio->nombre !!}<br>
                                       <b>GESTION :</b> {!! $row->colegio->gestion !!}<br>

                                       <b>ESPECIALIDAD :</b> {!! $row->especialidad->nombre !!}<br>
                                       <b>MODALIDAD :</b> {!! $row->modalidad->nombre !!}


                                       <p></p>
                                       <div class="row">
                                            <div class="col-md-12">
                                            @if($documentos->count() == 0)
                                            <div class="note note-danger">
                                                <h3>El solicitante aún no ha cargado sus documentos. </h3>
                                                <p> <b>DEBE CARGAR TODOS LOS DOCUMENTOS PARA QUE PUEDA SER EVALUADO. </b>  </p>
                                            </div>
                                            @else
                                            @foreach ($errors->all() as $error)
                                            <div class="note note-danger">
                                                <li>{{ $error }}</li>
                                            </div>
                                            @endforeach
                                            {!! Form::open(['url' => 'add-aplicant', 'method' => 'post']) !!}
                                                <input type="hidden" name="idpostulante" id="idpostulante" value="{!! $row->id !!}" >
                                                <input type="hidden" name="iduser" id="iduser" value="{!! Auth::user()->id !!}" >
                                                <div class="form-group">
                                                    {!! Form::label('PROMEDIO DE NOTA') !!}
                                                    {!! Form::text('promedio',$row->solicitante->promedio,['id' => 'promedio', 'class' => 'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('OBSERVACIONES') !!}
                                                    {!! Form::text('observaciones',$row->solicitante->observaciones,['id' => 'observaciones', 'class' => 'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('PERTENECE A CEPRE UNI: ') !!}
                                                    {!! Form::label('SI') !!}
                                                    {!! Form::radio('cepreuni',1,['id' => 'cepreuni', 'class' => 'form-control']) !!}
                                                    {!! Form::label('NO') !!}
                                                    {!! Form::radio('cepreuni',0,['id' => 'cepreuni', 'class' => 'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::label('OTORGA') !!}
                                                    <select class="form-control" name="otorga" id="otorga">
                                                        <option value="SEMIBECA" <?php if($row->solicitante->otorga == "SEMIBECA"){ echo "selected"; }else{ echo ""; } ?> >SEMIBECA</option>
                                                        <option value="BECA INTEGRAL" <?php if($row->solicitante->otorga == "BECA INTEGRAL"){ echo "selected"; }else{ echo ""; } ?> >BECA INTEGRAL</option>
                                                        <option value="DENEGADO" <?php if($row->solicitante->otorga == "DENEGADO"){ echo "selected"; }else{ echo ""; } ?> >DENEGADO</option>
                                                    </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::submit('GUARDAR',['class' => 'btn btn-primary']) !!}
                                                    <a href="{!! url('admin') !!}" class="btn btn-danger">ATRAS</a>
                                                </div>
                                            {!! Form::close() !!}
                                            @endif
                                            </div>
                                        </div>
                                        </div>
                                    @endforeach
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet light form-fit bordered">
                            <div class="portlet-body form">
                                <div class="row">
                                    <h2><b>DOCUMENTOS CARGADOS</b></h2>
                                    @foreach($documentos as $row2)
                                    <div class="col-md-4">
                                        <div class="cbp-l-caption-title"><b>{!! $row2->tipos->descripcion !!}</b></div>
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
                                    @if($documentos->count() == 0)
                                    <div class="note note-danger">
                                        <h3>El solicitante aún no ha cargado sus documentos. </h3>
                                        <p> <b>DEBE CARGAR TODOS LOS DOCUMENTOS PARA QUE PUEDA SER EVALUADO. </b>  </p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
@endsection
{!! Html::script('assets/global/plugins/jquery.min.js') !!}
{!! Html::script('assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')  !!}
{!! Html::script('assets/global/scripts/app.min.js') !!}

{!! Html::script('assets/pages/scripts/portfolio-4.min.js') !!}