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
                        <div class="m-heading-1 border-green m-bordered">
                            <h3>Bienvenido al Modulo de SEMIBECA</h3>
                            <p> Para poder participar en el proceso de SEMIBECA deberás seguir los siguientes pasos: </p>
                            <p> Paso 1 : Debe realizar el pago de la solicitud de SEMIBECA. </p>
                            <p> Paso 2 : Debe cargar los documentos solicitados para que pueda ser evaluado. </p>
                        </div>
                        @if(count($recaudacion) == 0)
                        <div class="note note-danger">
                            <h3>Usted aún no ha realizado su pago</h3>
                            <p> Debe realizar su pago para que pueda cargar sus documentos. </p>
                        </div>
                        <iframe src="{!! route('receipt') !!}" width="700" height="550"></iframe>
                        @else
                        <div id="cargado"></div>
                        <div id="error"></div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">CARGAR DOCUMENTOS</span>
                                            <a href="{!! url('uploaded-documents/'.Auth::user()->dni) !!}" class="btn btn-info">DOCUMENTOS CARGADOS</a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">

                                            <div class="form-body">
                                                {!! Form::open(['id' => 'Frm1', 'class' => 'form-horizontal form-bordered']) !!}
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">1. Partida de nacimiento del postulante.</label>
                                                    <div class="col-md-5">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="input-group input-large">
                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Seleccione </span>
                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                    <input type="file" name="carga1" id="carga1"> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary">CARGAR</button>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                                {!! Form::open(['id' => 'Frm2', 'class' => 'form-horizontal form-bordered']) !!}
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">2. Documento Nacional de identidad (DNI).</label>
                                                    <div class="col-md-5">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="input-group input-large">
                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Seleccione </span>
                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                    <input type="file" name="carga2" id="carga2"> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary">CARGAR</button>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                                {!! Form::open(['id' => 'Frm3', 'class' => 'form-horizontal form-bordered']) !!}
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">3. Certificado de estudios (1ero a 5to de secundaria).</label>
                                                    <div class="col-md-5">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="input-group input-large">
                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Seleccione </span>
                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                    <input type="file" name="carga3" id="carga3"> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary">CARGAR</button>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                                {!! Form::open(['id' => 'Frm4', 'class' => 'form-horizontal form-bordered']) !!}
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">4. Boletas de pago o recibos por honorarios del padre y de la madre, correspondiente a los dos últimos meses (Mayo-Junio 2017).</label>
                                                    <div class="col-md-5">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="input-group input-large">
                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Seleccione </span>
                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                    <input type="file" name="carga4" id="carga4"> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary">CARGAR</button>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                                {!! Form::open(['id' => 'Frm5', 'class' => 'form-horizontal form-bordered']) !!}
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">5. Autovalúo (PU-HR) o título de propiedad. Si vive en casa alquilada, recibo de pago o el contrato de alquiler. En caso de vivir alojado presentar la constancia de alojamiento simple, firmada por el dueño de la casa, adjuntando fotocopia del DNI del propietario.</label>
                                                    <div class="col-md-5">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="input-group input-large">
                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Seleccione </span>
                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                    <input type="file" name="carga5" id="carga5"> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary">CARGAR</button>
                                                    </div>
                                                </div>
                                                </form>
                                                {!! Form::close() !!}
                                                {!! Form::open(['id' => 'Frm6', 'class' => 'form-horizontal form-bordered']) !!}
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">6. Recibo de agua, energía eléctrica y teléfono de la vivienda que ocupa el postulante en la ciudad de Lima, correspondiente a los dos últimos meses (Mayo-Junio 2017).</label>
                                                    <div class="col-md-5">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="input-group input-large">
                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Seleccione </span>
                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                    <input type="file" name="carga6" id="carga6"> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary">CARGAR</button>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                                {!! Form::open(['id' => 'Frm7', 'class' => 'form-horizontal form-bordered']) !!}
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">7. Formato de registro de datos que tiene que escanearlo enviar por internet según la guía de procedimientos.</label>
                                                    <div class="col-md-5">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="input-group input-large">
                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Seleccione </span>
                                                                    <span class="fileinput-exists"> Cambiar </span>
                                                                    <input type="file" name="carga7" id="carga7"> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-primary">CARGAR</button>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                </div>
                
            </div>

@endsection