<?php
	$db_host=$_SERVER['RDS_HOSTNAME'].':'.$_SERVER['RDS_PORT']; 
	$db_usuario=$_SERVER['RDS_USERNAME']; 
	$db_password=$_SERVER['RDS_PASSWORD']; 
	$db_nombre=$_SERVER['RDS_DB_NAME']; 
	$conexion = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
	$db = mysqli_select_db($conexion, $_SERVER['RDS_DB_NAME']); 
	mysqli_query($conexion, "SET NAMES 'utf8'");
	
?>