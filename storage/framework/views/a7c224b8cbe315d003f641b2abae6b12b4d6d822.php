<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../bower_components/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo e(asset('/bower_components/adminbsb-materialdesign/plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo e(asset('/bower_components/adminbsb-materialdesign/plugins/node-waves/waves.css')); ?>" rel="stylesheet">

    <!-- Animation Css -->
    <link href="<?php echo e(asset('/bower_components/adminbsb-materialdesign/plugins/animate-css/animate.css')); ?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo e(asset('/bower_components/adminbsb-materialdesign/css/style.css')); ?>" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Gestor de<b> TESTS</b></a>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST">
                <div class="msg">Iniciar Sesión</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Email" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Recuérdame</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">ENTRAR</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="sign-up.html">¡Regístrate!</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="forgot-password.html">Recordar Contraseña</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="<?php echo e(asset('/bower_components/adminbsb-materialdesign/plugins/jquery/jquery.min.js')); ?>"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo e(asset('/bower_components/adminbsb-materialdesign/plugins/bootstrap/js/bootstrap.js')); ?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo e(asset('/bower_components/adminbsb-materialdesign/plugins/node-waves/waves.js')); ?>"></script>

<!-- Validation Plugin Js -->
<script src="<?php echo e(asset('/bower_components/adminbsb-materialdesign/plugins/jquery-validation/jquery.validate.js')); ?>"></script>

<!-- Custom Js -->
<script src="<?php echo e(asset('/bower_components/adminbsb-materialdesign/js/admin.js')); ?>"></script>
<script src="<?php echo e(asset('/bower_components/adminbsb-materialdesign/js/pages/examples/sign-in.js')); ?>"></script>
</body>

</html>