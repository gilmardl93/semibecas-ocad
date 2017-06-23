@extends('layouts.layout')
@section('content')
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="{!! url('dashboard') !!}">Panel de Control</a>
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
                                            <span class="caption-subject font-green sbold uppercase">EDITAR DATOS</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    {!! Form::open(['id' => 'FrmEditUser']) !!}
                                                    @foreach($users as $user)
                                                    <input type="hidden" name="id" id="id" value="$user->id">
                                                    <div class="form-group">
                                                        {!! Form::label('NOMBRES') !!}
                                                        {!! Form::text('nombres',$user->nombres,['id' => 'nombres', 'class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('PATERNO') !!}
                                                        {!! Form::text('paterno',$user->paterno,['id' => 'paterno', 'class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('MATERNO') !!}
                                                        {!! Form::text('materno',$user->materno,['id' => 'materno', 'class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('EMAIL') !!}
                                                        {!! Form::text('email',$user->email,['id' => 'email', 'class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('CELULAR') !!}
                                                        {!! Form::text('celular',$user->celular,['id' => 'celular', 'class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::submit('ACTUALIZAR',['class' => 'btn btn-primary']) !!}
                                                    </div>
                                                    @endforeach
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
@endsection