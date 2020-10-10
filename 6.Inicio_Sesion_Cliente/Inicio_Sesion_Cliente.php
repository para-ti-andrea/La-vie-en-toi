<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-16">
	<link rel="stylesheet" type="text/css" href="1.CSS_c/inicio_a.css">
	<link rel="stylesheet" type="text/css" href="1.CSS_c/menu_bar.css">
	<link rel="stylesheet" type="text/css" href="1.CSS_c/inicio_sesion.css">
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="icon" href="2.FOTOS/logo_2.png">
	<title>Inicio Sesion Cliente | Baúl de Vitalie</title>
</head>
<body>
<div class="fondo">	
	<div class="container">
<!--Logo de la empresa con vinvulo al inicio-->
		<div class="logo_b"><a href="../index.php">
				<img src="2.fotos/logo.png"
				style="height: 120px;
					   width : 120px;">
				</div></a>
		<!--Baul de Vitalie escrito-->
				<div class="titulo">
						<a href="../index.php">
						<h1>¡Bienvenida!</h1>
				</div></a>

		<div class="Botones">
	<!--Botones de Iniciar Sesion || Registrarse-->
				<div class="Registrar" >
					<a href="../3.registro_Cliente/registro_cliente.php"class="Registro"><strong>Registrarse</strong></a>
				</div>

				<div class="inicio_sesion" >
					<a href="../6.Inicio_Sesion_Cliente/index.php"class="Boton_inicio"> <strong>Inicio de Sesión</strong></a>
				</div>
		</div>	
	</div>
<!--Menu bar-->
	<nav>
		<div class="logo">
			¡Bienvenida!
		</div>
	<input type="checkbox" id="btn">
		<ul>
			<li><a class="a" href="../index.php">Inicio</a></li>
			<li><a class="a" href="../13.interfacesayuda/ayuda.php">Ayuda</a></li>
	</nav>
<!--Fin menu bar-->
<!--Inicio de sesión-->

	<div class="inicio_cliente">
		<div class="logo_c">
			<a href="../index.php">
			<img src="2.fotos/logo.png"
				style="height: 100px;
					   width : 100px;
					   margin-left:5%;
					   margin-top:7%;"></a>
		</div>
<br>
		 <form action="" method="POST" class="form">

		 <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }?>
	 		<label for="email" class="form-label">Correo: </label>
	 		<input type="email" name="email_c" id="email" class="form-input">

		 	<label for="password" class="form-label">Contraseña: </label>
		 	<input type="password" name="contrasena_c" id="password" class="form-input">

		 	<a href="../index.php" class="btn-cancelar">Cancelar</a>
			<input type="submit"  class="btn-submit" value="Enviar">
	
</body>
</html>