<?php

include('../login/session.php');
$usuario= $_SESSION['login_user'] ;
 $identificador= $_POST['idcurso'];

		$query= "SELECT * FROM info_cursos WHERE id='$identificador'";
		$resultado=$conectar->query($query);
		$rows= $resultado->fetch_assoc();


$archivo=$rows['pdf'];

echo $rows['nombre_curso'];

header('Content-Transfer-Encoding: binary');
header('content-type:application/pdf');

readfile($archivo);

?>

 


