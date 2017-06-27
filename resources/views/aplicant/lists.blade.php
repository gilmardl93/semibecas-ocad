        {!! Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
        {!! Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('assets/global/plugins/datatables/datatables.min.css') !!}
        {!! Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
        {!! Html::style('assets/global/css/components.min.css') !!}
        {!! Html::style('assets/global/css/plugins.min.css') !!}

                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-body form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                                        <thead>
                                                            <tr>
                                                                <th> PATERNO </th>
                                                                <th> MATERNO </th>
                                                                <th> NOMBRES </th>
                                                                <th> DNI </th>
                                                                <th> ACCION </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($solicitantes as $row)
                                                            <tr>
                                                                <td> {!! $row->postulante->paterno !!} </td>
                                                                <td> {!! $row->postulante->materno !!} </td>
                                                                <td> {!! $row->postulante->nombres !!} </td>
                                                                <td> {!! $row->postulante->numero_identificacion !!} </td>
                                                               
                                                                <td> <a href="{!! url('data/'.$row->postulante->numero_identificacion) !!}">MAS INFORMACION</a> </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                </div>
        
        {!! Html::script('assets/global/plugins/jquery.min.js') !!}
        {!! Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('assets/global/scripts/datatable.js') !!}
        {!! Html::script('assets/global/plugins/datatables/datatables.min.js') !!}
        {!! Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
        {!! Html::script('assets/pages/scripts/table-datatables-buttons.min.js') !!}