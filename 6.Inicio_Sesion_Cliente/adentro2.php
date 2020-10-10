<?php
include_once '../includes/user.php';
include_once '../includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
	$user->setUser($userSession->getCurrentUser());
	include_once 'adentro2.php';

	}else if(isset($_POST['email_c']) && isset($_POST['contrasena_c'])){
	$userForm = $_POST['email_c'];
	$passForm = $_POST['contrasena_c'];

	$user = new User();

		if($user->userExists($userForm, $passForm)){
			$userSession->setCurrentUser($userForm);
			$user->setUser($userForm);

			include_once 'adentro2.php';

		}else{
			$errorLogin = "Nombre de usuario y/o password incorrecto";
			include_once '4.php/inicio_sesion_cliente.php';
		}
}else{
		include_once 'inicio_sesion_cliente.php';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-16">
	<link rel="stylesheet" type="text/css" href="1.CSS_c/menu_bar.css">
	<link rel="stylesheet" type="text/css" href="1.CSS_c/style.css">
	<link rel="stylesheet" type="text/css" href="1.CSS_c/Menu_tree.css">
	<link rel="stylesheet" type="text/css" href="1.CSS_c/Inicio_a.css">
	<link rel="stylesheet" type="text/css" href="1.CSS_c/registro_cliente.css">
	<script src="https://kit.fontawesome.com/9c51562715.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="icon" href="2.fotos/logo_2.png">
	<title>Inicio | Baúl de Vitalie</title>
</head>
<body>

<div class="fondo">	
	<div class="container">
<!--Logo de la empresa con vinvulo al inicio-->
		<div class="logo_b"><a href="index.php">
				<img src="2.FOTOS/logo.png"
				style="height: 120px;
					   width : 120px;">
				</div></a>
		<!--Baul de Vitalie escrito-->
				<div class="titulo">
						<a href="index.php">
						<h1><?php
							if(isset($_SESSION['user'])){
								$user->setUser($userSession->getCurrentUser());
							echo ' '.$user->getNombre().' '.$user->	getp_apellido();  
						}?>
						</h1>
				</div></a>

		<div class="Botones">
	<!--Botones de Iniciar Sesion || Registrarse-->
				
				<div class="registro" >
					<a href="../includes/logout.php"class="cerrar"> <strong>Cerrar Sesion</strong></a>
				</div>	
		</div>	
	</div>
<!--Menu bar-->
	<nav>
		<div class="logo">
			¡Opciones!
		</div>
	<input type="checkbox" id="btn">
		<ul>
			<li><a class="a" href="../13.interfacesayuda/ayuda.php?id_c=<?php
				if(isset($_SESSION['user'])){
				$user->setUser($userSession->getCurrentUser());
				echo ' '.$user->getid_c();
				}
			?>">Ayuda</a></li>
		</ul>
	</nav>
<!--Fin menu bar-->


<!--titulo secundario-->
<div class="Disfraces">
			<h1 class="disfraz">
				Opciones
			</h1>
		</div>
<!--fin titulo secundario-->



<!--cover flow-->
<div class="div_mayor">
	<div class="b">
		<a href="../op1/1.php?id_c=<?php
				if(isset($_SESSION['user'])){
				$user->setUser($userSession->getCurrentUser());
				echo ' '.$user->getid_c();
				}
				?>">
			<li>Opcion 1</li>
	</div></a>
	<div class="c">
		<a href="../op2/1.php?id_c=<?php
				if(isset($_SESSION['user'])){
				$user->setUser($userSession->getCurrentUser());
				echo ' '.$user->getid_c();
				}
				?>">
			<li>Opcion 2</li>
		</div></a>
</div>
<!--Fin cover flow-->

<!--menu acordeon-->
<div class="contenedor-menu">
	<h3>Menu<i class="fas fa-bars"></i></h3>
	<ul class="menu">
		<li><a href="#"><i class="icono Izquierda fa fa-share-alt"></i>Redes Sociales<i class="icono derecha fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="https://www.facebook.com/cristhianmateo.ramirezrubiano/">Facebook</a></li> 
				<li><a href="">Whatsapp</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#0">Twitter</a></li>
			</ul>
		</li>
	</ul>
</div>
<!--Fin menu acordeon-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="3.JS/java_index.js"></script>
</body>
</html>