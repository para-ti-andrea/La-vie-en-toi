<?php

include_once '../includes/user.php';
include_once '../includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
	$user->setUser($userSession->getCurrentUser());
	include_once 'adentro.php';

	}else if(isset($_POST['email_c']) && isset($_POST['contrasena_c'])){
	$userForm = $_POST['email_c'];
	$passForm = $_POST['contrasena_c'];

	$user = new User();

		if($user->userExists($userForm, $passForm)){
			$userSession->setCurrentUser($userForm);
			$user->setUser($userForm);

			include_once 'adentro.php';

		}else{
			$errorLogin = "Nombre de usuario y/o password incorrecto";
			include_once 'Inicio_Sesion_Cliente.php';
		}
	
	
}else{
		include_once 'inicio_sesion_cliente.php';
}

?>