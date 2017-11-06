<?php

//require('core/models/class.Conexion.php');
//require('core/bin/functions/encrypt.php');


if (!empty($_POST['user'] && !empty($_POST['pass']))) {
	$db = new conexion();
	$data = $db-> real_escape_string($_POST['user']);
	$pass = encrypt($_POST['pass']);
	$sql = $db-> query("SELECT num_user FROM users WHERE (user='$data' OR email='$data') AND pass='$pass' LIMIT 1 ");
	if ($db-> rows($sql) > 0 ) {
		
		$res = $db-> recorrer($sql);
		$_SESSION['app_id'] = $res[0];
		
		if ($_POST['sesion']) {		
			ini_set('session.cookie_lifetime', time() + (60*60*24)); 	
		}
		echo 1;	
	}else{
		echo '<div class="alert alert-dismissible alert-danger">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
			 <h4>Datos Erroneos</h4>';

	}
	$db-> liberar($sql);
	$db-> close();
}else
{
	echo '<div class="alert alert-dismissible alert-danger">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <h4>Todos los campos deben estar llenos</h4>';
}
?>