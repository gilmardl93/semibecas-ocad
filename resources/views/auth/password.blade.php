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
                                            <span class="caption-subject font-green sbold uppercase">ACTUALIZAR CONTRASEÑA</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    {!! Form::open(['id' => 'FrmEditPassword']) !!}
                                                    @foreach($users as $user)
                                                    <input type="hidden" name="id" id="id" value="$user->id">
                                                    <div class="form-group">
                                                        {!! Form::label('PASSWORD') !!}
                                                        {!! Form::password('password',['id' => 'password', 'class' => 'form-control']) !!}
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
<script>

</script>