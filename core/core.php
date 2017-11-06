<?php
	/////Nucleo de la Pagina/////

	session_start();

	/////Constantes de conexcion/////
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_USER','root');
	DEFINE('DB_PASS','');
	DEFINE('DB_NAME','sophia');

	/////Constanses de la APP/////
	DEFINE('DIR_HTML', 'html');
	DEFINE('APP_NAME', 'Sophia');
	DEFINE('APP_URL', 'http://localhost/Sophia/');

	/////Estructura/////
	require('vendor/autoload.php');
	require('core/models/class.Conexion.php');
	require('core/bin/functions/encrypt.php');
	require('core/bin/functions/users.php');

	$users = users();
	
?>