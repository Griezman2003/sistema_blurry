<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SISTEMA:: ACCESO GILBERTO 123</title>

	<link href="Public/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="Public/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="Public/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="Public/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="Public/img/favicon.png" rel="icon" type="image/png">
	<link href="Public/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="Public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="Public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="Public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="Public/css/main.css">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box">
                    <div class="sign-avatar">
                        <img src="Public/img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title">ACCESO</header>
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Correo o Telefono"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña"/>
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Mantener registrado</label>
                        </div>
                        <div class="float-right reset">
                            <a href="reset-password.html">Restablecer Contraseña</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded">Entrar</button>
                    <p class="sign-note">¿Eres Nuevo? <a href="sign-up.html">Entrar</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="Public/js/lib/jquery/jquery.min.js"></script>
<script src="Public/js/lib/tether/tether.min.js"></script>
<script src="Public/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="Public/js/plugins.js"></script>
    <script type="text/javascript" src="Public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="Public/js/app.js"></script>
</body>
</html>