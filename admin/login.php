<!DOCTYPE html>
<html lang="es">
	
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Turismo Administrador</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="assets/img/logo.png"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Iniciar Sesión</h1>
							<form method="post" action="">
								<p class="account-subtitle">Bienvenido</p>
								<?php 
								include "controlador/iniciar_sesion.php";
								include "conexion.php";
								?>
								<div class="form-group">
									<label>Rut</label>
									<input class="form-control" type="text" name = "rut_emp" placeholder="Ej: 12345678-9"> </div>
								<div class="form-group">
									<label>Contraseña</label>
									<input class="form-control" type="password" name="contrasena" placeholder="Contraseña"> </div>
								<div class="form-group">
									<input class="btn btn-primary btn-block" name="loginbtn" type="submit" value="Iniciar Sesión">
								</div>
							</form>
						<!--<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
							-->	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>