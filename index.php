
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-16">
	<link rel="stylesheet" type="text/css" href="1.inicio/1.CSS/Inicio_cliente.css">
	<link rel="stylesheet" type="text/css" href="1.inicio/1.CSS/menu_bar.css">
	<link rel="stylesheet" type="text/css" href="1.inicio/1.CSS/Cover_Flow_a.css">
	<link rel="stylesheet" type="text/css" href="1.inicio/1.CSS/Menu_tree.css">
	<script src="https://kit.fontawesome.com/9c51562715.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="icon" href="1.inicio/2.fotos/logo_rose.png">	
	<title>La vie en toi | Inicio</title>
</head>
<body>
<div class="fondo">	

	<div class="container">
<!--Logo de la empresa con vinvulo al inicio--> 
		<div class="logo_b"><a href="index.php">
				<img src="1.inicio/2.fotos/logo.png"
				style="height: 120px;
					   width : 120px;">
				</div></a>
		<!--Baul de Vitalie escrito-->
				<div class="titulo">
						<a href="index.php">
						<h1>¡Bienvenida! </h1>
				</div></a>

		<div class="Botones">
	<!--Botones de Iniciar Sesion || Registrarse-->
				<div class="Registrar" >
					<a href="3.Registro_Cliente/registro_cliente.php"class="Registro"><strong>Registrarse</strong></a>
				</div>


				<div class="inicio_sesion" >
					<a href="6.Inicio_Sesion_Cliente/index.php"class="Boton_inicio"> <strong>Inicio de Sesión</strong></a>
				</div>

				<!--Cuaro de busqueda de la empresa-->
				<div class="box">
  					<div class="container-1">
     					 <input type="search" id="search" placeholder="Buscar Empresa" />
 					 </div>
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
			<li><a class="a" href="index.php">Inicio</a></li>

			<li><a class="a" href="9.categorias_inicio/Categorias.php">10/10/2020</a>
				<ul>
					<li><a href="13.interfacesayuda/ayuda_cliente.php">Feliz</a></li>
					<li><a href="13.interfacesayuda/ayuda_cliente.php">Cumpleaños</a></li>
				</ul>
			</li>

			<li><a class="a" href="13.interfacesayuda/ayuda_a.php">Ayuda</a></li>
		</ul>
	</nav>
<!--Fin menu bar-->

<!--titulo secundario-->
<div class="Disfraces">
			<h1 class="disfraz">
				Photos
			</h1>
		</div>
<!--fin titulo secundario-->

<!--cover flow-->
<div class="Contenedor-cover">
		<ul id="menu">
			<li> <a href="#">foto 1</a> </li>
		  	<li> <a href="#">foto 2</a> </li>
		  	<li class="highlighted"> <a href="#">foto 3</a> </li>
		  	<li> <a href="#">foto 4</a> </li>
		  	<li> <a href="#">foto 5</a> </li>
		</ul>
	</div>
<!--Fin cover flow-->

<!--menu acordeon (pendiente)-->
<div class="contenedor-menu">
	<h3>Menu<i class="fas fa-bars"></i></h3>
	<ul class="menu">
		<li><a href="#"><i class="icono Izquierda fa fa-share-alt"></i>Redes Sociales<i class="icono derecha fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="#">Facebook</a></li> 
				<li><a href="#">Whatsapp</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#0">Twitter</a></li>
			</ul>
		</li>
	</ul>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="1.inicio/3.JS/java_index.js"></script>
</div>
<!--Fin menu acordeon (pendiente)-->

</body>
</html>