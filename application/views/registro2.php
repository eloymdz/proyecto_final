<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/proyecto_final//assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/proyecto_final//assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/proyecto_final//assets/css/style.css">
	<script type="text/javascript" src="http://localhost/proyecto_final//assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://localhost/proyecto_final//assets/js/all.min.js"></script>
</head>

<body>
	<div class="card card-container">
		<h1>Registrarse</h1>
		<!-- Ver video Codigniter  10 -->
		<!-- <p>The Nombre de usuario field is required.</p>
<p>El correo es invalido.</p>
 -->
		<form action="http://localhost/proyecto_final/registro/create" method="POST" accept-charset="utf-8">
			<div><label>Nombre de usuario: </label><input type="text" name="username" value="" class="form-control" id="username" />
				<br></div>
			<div><label>Correo electronico: </label><input type="email" name="email" value="" class="form-control" id="email" />
				<br></div>
			<div><label>Contraseña: </label><input type="password" name="password" value="" class="form-control" id="password" />
				<br></div>
			<div><label>Confirmar contraseña: </label><input type="password" name="password_confirm" value="" class="form-control" id="password_confirm" />
				<br></div><input type="submit" name="submit" value="Enviar datos" class="btn btn-lg btn-primary btn-block btn-signin" id="submit" />
			<br>
			<b><a class="forgot-password" href="http://localhost/proyecto_final/">Volver</a></b>
		</form>
		<!--Si existe la variable $msg imprimir variable, de lo contrario imprimir string vacio -->
	</div>
</body>

</html>
