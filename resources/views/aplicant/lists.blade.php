
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />


                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-body form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
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
                                                            <tr class="odd gradeX">
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
                            
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>

        <script src="../assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>