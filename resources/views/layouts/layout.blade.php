<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>SEMIBECAS | Panel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        {!! Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}
        {!! Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
        {!! Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}

        {!! Html::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}

        {!! Html::style('assets/global/css/components.min.css') !!}
        {!! Html::style('assets/global/css/plugins.min.css') !!}

        {!! Html::style('assets/layouts/layout/css/layout.min.css') !!}
        {!! Html::style('assets/layouts/layout/css/themes/darkblue.min.css') !!}
        {!! Html::style('assets/layouts/layout/css/custom.min.css') !!}

        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">

            <div class="page-header navbar navbar-fixed-top">

                <div class="page-header-inner ">

                    <div class="page-logo">
                        <a href="index.html">
                            <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>

                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>

                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> {!! Auth::user()->dni !!} </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{{ url('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="icon-key"></i> Cerrar Sesion </a>
                                        </a>
                                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                </div>

            </div>

            <div class="clearfix"> </div>

            <div class="page-container">

                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            @if(Auth::user()->idrole == 83)
                            <li class="nav-item start ">
                                <a href="{!! url('download-document') !!}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">DESCARGAR DOCUMENTOS</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{!! url('dashboard') !!}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">CARGAR DOCUMENTOS</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item start ">
                                <a href="{!! url('admin') !!}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">SOLICITANTES</span>
                                </a>
                            </li>
                            @endif
                        </ul>

                    </div>

                </div>
                @if(Auth::user()->idrole == 83)
                    @yield('content')
                @else
                    @yield('admin')
                @endif

            <div class="page-footer">
                <div class="page-footer-inner"> <?php echo date("Y");?> Todos los derechos reservados | gmoreno@admisionuni.edu.pe
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>

        </div>

        {!! Html::script('assets/global/plugins/jquery.min.js') !!}
        {!! Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('assets/global/plugins/js.cookie.min.js') !!}
        {!! Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
        {!! Html::script('assets/global/plugins/jquery.blockui.min.js') !!}
        {!! Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}

        {!! Html::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}

        {!! Html::script('assets/global/scripts/app.min.js') !!}

        {!! Html::script('assets/layouts/layout/scripts/layout.min.js') !!}
        {!! Html::script('assets/layouts/layout/scripts/demo.min.js') !!}
        {!! Html::script('assets/layouts/global/scripts/quick-sidebar.min.js') !!}

        {!! Html::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}

<script>
    $(function(){
        $("#aplicant-lists").load('aplicant-list');
    });
</script>
        <script>
            $("#Frm1").validate({
                rules : 
                {
                    carga1 : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(Frm1);
                    $.ajax({
                        url: "load1",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {
                            $("#cargado").html('<div class="note note-success"><h3>Documento cargado</h3><p> Si termino de cargar sus documentos presione FINALIZAR. </p></div>').show(1000);
                            $("#cargado").hide(5000);                        
                        }
                    });
                }
            });
        </script>
        <script>
            $("#Frm2").validate({
                rules : 
                {
                    carga2 : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(Frm2);
                    $.ajax({
                        url: "load2",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {
                            $("#cargado").html('<div class="note note-success"><h3>Documento cargado</h3><p> Si termino de cargar sus documentos presione FINALIZAR. </p></div>').show(1000);
                            $("#cargado").hide(5000);                        
                        }
                    });
                }
            });
        </script>
        <script>
            $("#Frm3").validate({
                rules : 
                {
                    carga3 : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(Frm3);
                    $.ajax({
                        url: "load3",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {
                            $("#cargado").html('<div class="note note-success"><h3>Documento cargado</h3><p> Si termino de cargar sus documentos presione FINALIZAR. </p></div>').show(1000);
                            $("#cargado").hide(5000);                        
                        }
                    });
                }
            });
        </script>
        <script>
            $("#Frm4").validate({
                rules : 
                {
                    carga4 : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(Frm4);
                    $.ajax({
                        url: "load4",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {
                            $("#cargado").html('<div class="note note-success"><h3>Documento cargado</h3><p> Si termino de cargar sus documentos presione FINALIZAR. </p></div>').show(1000);
                            $("#cargado").hide(5000);                        
                        }
                    });
                }
            });
        </script>
        <script>
            $("#Frm5").validate({
                rules : 
                {
                    carga5 : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(Frm5);
                    $.ajax({
                        url: "load5",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {                            
                            $("#cargado").html('<div class="note note-success"><h3>Documento cargado</h3><p> Si termino de cargar sus documentos presione FINALIZAR. </p></div>').show(1000);
                            $("#cargado").hide(5000);
                        }
                    });
                }
            });
        </script>
        <script>
            $("#Frm6").validate({
                rules : 
                {
                    carga6 : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(Frm6);
                    $.ajax({
                        url: "load6",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {
                            $("#cargado").html('<div class="note note-success"><h3>Documento cargado</h3><p> Si termino de cargar sus documentos presione FINALIZAR. </p></div>').show();
                            $("#cargado").hide(5000);
                        }
                    });
                }
            });
        </script>
        <script>
            $("#Frm7").validate({
                rules : 
                {
                    carga7 : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(Frm7);
                    $.ajax({
                        url: "load7",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {
                            $("#cargado").html('<div class="note note-success"><h3>Documento cargado</h3><p> Si termino de cargar sus documentos presione FINALIZAR. </p></div>').show(1000);
                            $("#cargado").hide(5000);
                        }
                    });
                }
            });
        </script>
        <script>
            $("#FrmEditPassword").validate({
                rules : 
                {
                    password : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(FrmEditPassword);
                    $.ajax({
                        url: "update-password",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {
                            window.location ="dashboard";
                        }
                    });
                }
            });
        </script>
        <script>
            $("#FrmEditUser").validate({
                rules : 
                {
                    carga7 : { required : true }
                },
                submitHandler : function(form)
                {
                    var data = new FormData(FrmEditUser);
                    $.ajax({
                        url: "update-data",
                        type: "post",
                        dataType: "html",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success : function()
                        {
                            window.location ="dashboard";
                        }
                    });
                }
            });
        </script>
    </body>