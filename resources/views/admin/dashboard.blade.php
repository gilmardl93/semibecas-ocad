@extends('layouts.layout')

@section('admin')
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="{!! url('admin') !!}">Panel de Control</a>
                                </li>
                            </ul>
                        </div>

                        <h1 class="page-title"> LISTADO DE SOLICITANTES 
                        </h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                               <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="">{!! $solicitantes->count() !!}</span>
                                        </div>
                                        <div class="desc"> TOTAL SOLICITANTES </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">LISTADO DE SOLICITANTES </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    {!! Form::open(['method' => 'post', 'url' => 'search-dni']) !!}
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                                {!! Form::text('dni',null,['id' => 'dni', 'class' => 'form-control', 'placeholder' => 'Ingrese DNI']) !!}
                                            </div>
                                            <div class="col-md-1">
                                                {!! Form::submit('BUSCAR',['class' => 'btn btn-primary']) !!}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                    <table class="table table-bordered table-hover">
                                        <thead> 
                                            <tr>
                                                <td>PATERNO</td>
                                                <td>MATERNO</td>
                                                <td>NOMBRES</td>
                                                <td>DNI</td>
                                                <td>ACCION</td>
                                                <td>ESTADO</td>
                                                <td>OTORGA</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($solicitantes as $row)
                                            <tr>
                                                <td> {!! $row->postulante->paterno !!} </td>
                                                <td> {!! $row->postulante->materno !!} </td>
                                                <td> {!! $row->postulante->nombres !!} </td>
                                                <td> {!! $row->postulante->numero_identificacion !!} </td>
                                                <td> <?php if($row->solicitante->iduser != "" && $row->solicitante->observaciones != "" && $row->solicitante->otorga != "" && $row->solicitante->promedio != ""){ 
                                                    echo '<span class="label label-primary">TERMINADO</span>';  }else{ ?> <a href="{!! url('data/'.$row->postulante->numero_identificacion) !!}">MAS INFORMACION</a> <?php } ?>
                                                 </td>
                                                <td><?php if($row->solicitante->iduser != "" && $row->solicitante->observaciones != "" && $row->solicitante->otorga != "" && $row->solicitante->promedio != ""){ echo '<span class="label label-primary">TERMINADO</span>'; }else{ echo '<span class="label label-danger">INCONCLUSO</span>'; } ?> </td>
                                                <td> {!! $row->solicitante->otorga !!} </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $solicitantes->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
@endsection
{!! Html::script('assets/global/plugins/jquery.min.js') !!}
<script>
    $(function(){

        $("#aplicant-lists").load('aplicant-list');
    });
</script>