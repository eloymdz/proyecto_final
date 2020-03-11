<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/all.min.js"></script>
</head>
<body>
	<div class="card card-container">
    <h1>Registrarse</h1>
<!-- Ver video Codigniter  10 -->
<!-- <?php echo validation_errors(); ?> -->
    <?php
    echo form_open('registro/create',array('method' => 'POST'));
		$user  =  array ( 'class'  =>  'form-control' , 'name' => 'username',  'id'  =>  'username', 'placeholder' => 'Nombre', 'required' => '' );
		echo "<div>";
      echo form_label('Nombre de usuario: ');
      echo form_input($user);
      echo "<br>";
		echo "</div>";

		$email  =  array ( 'type' => 'email', 'name' => 'email', 'class'  =>  'form-control' ,  'id'  =>  'email', 'placeholder' => 'Correo', 'required' => '' );
		echo "<div>";
      echo form_label('Correo electronico: ');
      echo form_input($email);
      echo "<br>";
		echo "</div>";

		$passwd  =  array ( 'type' => 'password', 'name' => 'password', 'class'  =>  'form-control' ,  'id'  =>  'password', 'placeholder' => 'Contraseña', 'required' => '');
		echo "<div>";
			echo form_label('Contraseña: ');
      echo form_password($passwd);
      echo "<br>";
		echo "</div>";

		$passwd_c  =  array ( 'type' => 'password', 'name' => 'password_confirm', 'class'  =>  'form-control' ,  'id'  =>  'password_confirm', 'placeholder' => 'Contraseña', 'required' => '' );
		echo "<div>";
		  echo form_label('Confirmar contraseña: ');
      echo form_password($passwd_c);
      echo "<br>";
		echo "</div>";

		$enviar  =  array ( 'class'  =>  'btn btn-lg btn-primary btn-block btn-signin' , 'name' => 'submit',  'id'  =>  'submit' );
      echo form_submit($enviar,'Enviar datos');

		?>
		<br>
		<b><a class="forgot-password" href="<?php echo base_url(); ?>">Volver</a></b>
		<?php
    echo form_close();
    ?>
    <?= isset($msg) ? $msg : "" ?> <!--Si existe la variable $msg imprimir variable, de lo contrario imprimir string vacio -->
</div>
  </body>
</html>
