<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>SEMIBECAS | UNI - OCAD</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        {!! Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}
        {!! Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
        {!! Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}

        {!! Html::style('assets/global/plugins/select2/css/select2.min.css') !!}
        {!! Html::style('assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}

        {!! Html::style('assets/global/css/components.min.css') !!}
        {!! Html::style('assets/global/css/plugins.min.css') !!}

        {!! Html::style('assets/pages/css/login.min.css') !!}

        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class=" login">

        <div class="logo">
            <a href="">
                <img src="../assets/pages/img/logo-big.png" alt="" /> </a>
        </div>

        <div class="content">
            {!! Form::open(['id' => 'FrmLogin', 'class' => 'login-form']) !!}
                <h3 class="form-title font-green">INICIAR SESION</h3>
                <div class="alert alert-info ">
                    <span> Usted debe estar registrado y haber completado todo su registro en el sistema de inscripcion. </span>
                </div>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Ingrese su DNI y su contraseña. </span>
                </div>
                <div id="error"></div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">DNI</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="DNI" name="dni" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Contraseña" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">ENTRAR</button>
                    <a href="http://www.inscripciones.uni.edu.pe/password/reset" class="forget-password">Olvide mi clave </a>
                </div>
            {!! Form::close() !!}

            {!! Form::open(['id' => 'FrmRegistro', 'class' => 'register-form']) !!}
                <h3 class="font-green">NUEVO</h3>
                <div class="form-group">
                    {!! Form::text('dni',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'DNI', 'id' => 'dni']) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password',['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Contraseña', 'id' => 'password']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('nombres',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Nombres', 'id' => 'nombres']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('paterno',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Paterno', 'id' => 'paterno']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('materno',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Materno', 'id' => 'materno']) !!}
                </div>
                <div class="form-group">
                    {!! Form::email('email',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email', 'id' => 'email']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('celular',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Celular', 'id' => 'celular']) !!}
                </div>
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn green btn-outline">Atras</button>
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">REGISTRAR</button>
                </div>
            {!! Form::close() !!}

        </div>
        <div class="copyright"> Oficina Central de Admisión. Universidad Nacional de Ingeniería . </div>

        {!! Html::script('assets/global/plugins/jquery.min.js') !!}
        {!! Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('assets/global/plugins/js.cookie.min.js') !!}
        {!! Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
        {!! Html::script('assets/global/plugins/jquery.blockui.min.js') !!}
        {!! Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}

        {!! Html::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}
        {!! Html::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}
        {!! Html::script('assets/global/plugins/select2/js/select2.full.min.js') !!}

        {!! Html::script('assets/global/scripts/app.min.js') !!}

        {!! Html::script('assets/pages/scripts/login.js') !!}

    </body>

</html>