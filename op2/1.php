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
        <h1>¡Feliz cumpleaños!</h1>
    </div>
</div>


<div class="text_1">
        <p class="p">
        ¡¡El día de hoy celebras un año más de vida!! ¡Y no sabes cuánto me alegra eso!, 
        me alegra que estés aquí “conmigo” que a pesar de los pocos momentos para mi han 
        sido demasiado especiales para mi y espero que para ti también, yo enserio espero 
        que la pases de la mejor manera del mundo que te sientas plan con los tuyos, y 
        quiero que sepas que siempre podrás contar con migo y si puedo ayudar par a mi 
        será un placer ayudarte en lo que tu necesites siempre, y en caso de ser algo 
        que no sé, pues algo improvisamos jijijijiji quiero que sepas que te quiero 
        demasiado y con mi corazón (con lo que queda) y que de mi parte siempre tendrás 
        los brazos abiertos te quiero <?php echo"<3"; ?>
        <br>
        <br>
        <strong>"podremos ir tan lento como quieras, tu sigue curándote; yo seguiré cuiudándote"</strong>
        <br>
        -Lst
        
        </p>
    </div>

<div class="contenedor-boton">
        <a href="../6.inicio_sesion_cliente/adentro2.php?id_c=<?php
                        if(isset($_SESSION['user'])){
                        $user->setUser($userSession->getCurrentUser());
                        echo ' '.$user->getid_c();}?>">
            <label for="atras" ><input type="button" id="atras" class="atras" value="Atrás"></label>
        </a>
    </div>  
</body>
</html>