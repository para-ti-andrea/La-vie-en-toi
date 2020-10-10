<html lang="es">
<head>
	<meta charset="utf-16">
	<link rel="stylesheet" type="text/css" href="CSS/inicio_cliente.css">
	<link rel="stylesheet" type="text/css" href="CSS/menu_bar.css">
	<link rel="stylesheet" type="text/css" href="CSS/textos_c.css">
	<link rel="stylesheet" type="text/css" href="CSS/inicio_a.css">
	<link rel="shortcut icon" type="icon" href="../1.inicio/2.fotos_a/logo_rose.png">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Playfair+Display&display=swap" rel="stylesheet">
	<title>Baúl de Vitalie | Video de ayuda</title>
</head>
<body>
<div class="fondo">	

	<div class="container">
<!--Logo de la empresa con vinvulo al inicio-->
		<div class="logo_b"><a href="../6.inicio_sesion_cliente/adentro2.php?id_c=<?php
                        if(isset($_SESSION['user'])){
                        $user->setUser($userSession->getCurrentUser());
                        echo ' '.$user->getid_c();}?>">
				<img src="../1.inicio/2.fotos_a/logo.png"
				style="height: 120px;
					   width : 120px;">
				</div></a>
		<!--Baul de Vitalie escrito-->
				<div class="titulo">
				<a href="../6.inicio_sesion_cliente/adentro2.php?id_c=<?php
                        if(isset($_SESSION['user'])){
                        $user->setUser($userSession->getCurrentUser());
                        echo ' '.$user->getid_c();}?>">
						<h1>Baúl de Vitalie</h1>
				</div></a>

		<div class="Botones">
	<!--Botones de Iniciar Sesion || Registrarse-->
				<div class="Registrar" >
					<a href="../includes/logout.php"class="cerrar"><strong>Cerrar sesión</strong></a>
				</div>				
		</div>	
	</div>
<!--Menu bar-->
	<nav>
		<div class="logo">
		¿Cómo funcionamos?
		</div>
	<input type="checkbox" id="btn">
		<ul>
			<li><a class="a" href="../6.inicio_sesion_cliente/adentro2.php?id_c=<?php
                        if(isset($_SESSION['user'])){
                        $user->setUser($userSession->getCurrentUser());
                        echo ' '.$user->getid_c();}?>">Inicio</a>
			</li>
		</ul>
	</nav>
<!--Fin menu bar-->

<!--Empresa-->
	<div class="texto_1">
		<p>
			El sistema tiene como fien dar mensajes para esto debes primero registrarte y despúes debes iniciar sesión
			despues podras guarte y apor la parte visual del sistema, <strong>espero te guste</strong> :)
		</p>
	</div>

</body>
</html>