<?php
include_once '../includes/user.php';
include_once '../includes/user_session.php';
$userSession = new UserSession();
$user = new User();
if(isset($_SESSION['user'])){
	$user->setUser($userSession->getCurrentUser());
	include_once '1.php';
	}else if(isset($_POST['email_c']) && isset($_POST['contrasena_c'])){
	$userForm = $_POST['email_c'];
	$passForm = $_POST['contrasena_c'];
	$user = new User();
		if($user->userExists($userForm, $passForm)){
			$userSession->setCurrentUser($userForm);
			$user->setUser($userForm);
			include_once 'perfil_usuario.php';
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
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9c51562715.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="icon" href="fotos/logo_2.png">
	<title>Opción 1</title>
</head>
<body>

<div class="header">
    <div class="title">
        <h1>Tú sonrisa</h1>
    </div>

    <div class="contenedor-boton">
        <a href="../6.inicio_sesion_cliente/adentro2.php?id_c=<?php
                        if(isset($_SESSION['user'])){
                        $user->setUser($userSession->getCurrentUser());
                        echo ' '.$user->getid_c();}?>">
            <label for="atras" ><input type="button" id="atras" class="atras" value="Atrás"></label>
        </a>
    </div>
</div>
    <div class="imagen">
        <img src="fotos/img1.png" alt="Buscar en carpeta fotos de 'op1'" class="img_sonrrisa" >
    </div>

    <div class="text_1">
        <p class="p">
        No sé si en algún momento te conté lo fan que soy de tu sonrisa 
        es una de las cosas más lindas físicas que tienes porque es estética 
        y bastante hermosa de todas las maneras que se vea, aparte es una perfecta 
        combinación de labios hermosos suaves y dientes perfectos.  
        </p>
    </div>

    <div class="div_mayor">
        <div class="op1">
            <a href="../op1/2.php?id_c=<?php
                    if(isset($_SESSION['user'])){
                    $user->setUser($userSession->getCurrentUser());
                    echo ' '.$user->getid_c();
                    }
                    ?>">
                <li class="li"> <strong>Opción 2</strong></li>
        </div></a>

        <div class="op2">
        <a href="../op1/3.php?id_c=<?php
                    if(isset($_SESSION['user'])){
                    $user->setUser($userSession->getCurrentUser());
                    echo ' '.$user->getid_c();
                    }
                    ?>">
                <li class="li"><strong>Opción 3</strong></li>
            </div></a>
    </div>
</body>
</html>