<?php

require "../1.inicio/Database.php";

	if (!empty($_POST['nombre']) && 
		!empty($_POST['p_apellido']) &&
		!empty($_POST['telefono']) &&
		!empty($_POST['email_c']) &&
		!empty($_POST['contrasena_c'])) :

	  $sql = "INSERT INTO cliente (nombre, p_apellido, s_apellido, genero, telefono, email_c, contrasena_c) 
	  VALUES (:nombre, :p_apellido, :s_apellido, :genero, :telefono, :email_c, :contrasena_c)";

	  $stmt = $conn->prepare($sql);
	  $stmt->bindParam(':nombre', $_POST['nombre']);
	  $stmt->bindParam(':p_apellido', $_POST['p_apellido']);
	  $stmt->bindParam(':s_apellido', $_POST['s_apellido']);
	  $stmt->bindParam(':genero', $_POST['genero']);
	  $stmt->bindParam(':telefono', $_POST['telefono']);
	  $stmt->bindParam(':email_c', $_POST['email_c']);
	  /*$hash = password_hash($_POST['contrasena_c'], PASSWORD_DEFAULT, ['cost' => 10]);*/
	  $contrasena_c = ($_POST['contrasena_c']);
	  $stmt->bindParam(':contrasena_c', $contrasena_c);
  
	  if ($stmt->execute()) {
		$message = 'Se ha registrado correctamente!!!';
	  } else {
		$message = 'No se ha podido registrar';
	  }
	endif;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-16">
	<link rel="stylesheet" type="text/css" href="1.CSS/Inicio_cliente.css">
	<link rel="stylesheet" type="text/css" href="1.CSS/menu_bar.css">
	<link rel="stylesheet" type="text/css" href="1.CSS/textos.css">
	<link rel="stylesheet" type="text/css" href="1.CSS/formulario.css">
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="icon" href="3.fotos/logo_2.png"/>
	<title>Registro Cliente | Baúl de Vitalie</title>
</head>
<body>

<div class="fondo">	
	<div class="container">
<!--Logo de la empresa con vinvulo al inicio-->
		<div class="logo_b"><a href="../index.php">
				<img src="3.FOTOS/logo.png"
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
				<div class="Registrar" disabled >
					<div class="Registro"><strong>Registrarse</strong></div>
				</div>


				<div class="inicio_sesion" >
					<a href="../6.Inicio_Sesion_Cliente/index.php"class="Boton_inicio"> <strong>Inicio de Sesión</strong></a>
				</div>
	
		</div>	
	</div>
<!--Menu bar-->
	<nav>
		<div class="logo">
			¡Bienvenido!
		</div>
	<input type="checkbox" id="btn">
		<ul>
			<li><a class="a" href="../index.php">Inicio</a></li>
			<li><a class="a" href="../13.interfacesayuda/ayuda.php">Ayuda</a></li>
		</ul>
	</nav>
<!--Fin menu bar-->
<div class="formulario_campos">
		<div class="text1">
			<h3>Formulario Cliente...</h3>
		</div>

		<div class="text2">
			<h3 style="color: red;
						float: left;
						margin-left: 55%">*</h3>
			<h3 class="campos">Campos Obligatorios</h3>
		</div>
</div>

<div class="registro">
<form action="Registro_Cliente.php" method="POST" class="form">

<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
	<?php endif; ?>
	<br>	

	 	<label for="nombre1" class="form-label">Nombre *</label>
	 	<input type="name" name="nombre" id="nombre1" class="form-input" >

	 	<label for="p_apellido1" class="form-label">Primer Apellido *</label>
	 	<input type="family-name" name="p_apellido" id="p_apellido1" class="form-input" >

	 	<label for="s_apellido1" class="form-label">Segundo apellido</label>
	 	<input type="family-name" name="s_apellido" id="s_apellido1" class="form-input" >


		<label for="Genero" name="label"class="form-label">Genero *</label><br>
		<div class="radio">
			<input type="radio" class="radio" id="hombre" name="genero" value="Hombre"/>
			<label class="h5" for="hombre">Hombre</label> 
			
			<input type="radio" class="radio" id="mujer" name="genero" value="Mujer"/>
			<label class="h5" for="mujer">Mujer</label>

			<input type="radio" class="radio" id="s_especificar" name="genero" value="Sin_especificar"/>
			<label class="h5" for="s_especificar">Sin especificar</label>
		
		</div>

	 	<label for="telefono1" class="form-label" style="margin-top: 5%;">Telefono *</label>
	 	<input type="tel" name="telefono" id="telefono1" class="form-input" >

	 	<label for="Correo1" class="form-label">Correo *</label>
	 	<input type="email" name="email_c" id="Correo1" class="form-input" >

	 	<label for="Contrasena1" class="form-label">Contraseña *</label>
	 	<input type="password" name="contrasena_c" id="Contrasena1" class="form-input">

	 	<a href="../index.php" class="btn-cancelar">Cancelar</a>
		 <input type="submit" name="enviar" class="btn-submit">
	 </form>
</div>	
</body>
</html>