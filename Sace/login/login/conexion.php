<?php
//cambiar usuario
	$root='root';
	$pass=''; 
	$server='127.0.0.1'; //servidor
	$db='sistema_escolar'; //nombre de la base de datos
	$conectar=mysqli_connect($server,$root,$pass,$db) or die("error al conectar la base de datos".mysql_error());
	

?>