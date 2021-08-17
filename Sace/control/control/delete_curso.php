<?php
include('../login/session.php');
$usuario= $_SESSION['login_user'] ;

//Recibir los datos y almacenarlos en variables

$identificador=$_POST['idcurso'];

//consulta sql para insertar datos
 $borrar="DELETE FROM info_cursos WHERE id='$identificador'";

 //ejecutar consulta
 $resultado=mysqli_query($conectar,$borrar);

 if (!$resultado) {
 	echo "error al registrarse";
 }else{
    header("location: cursos-actuales.adm.php");
 }
 //cerrar conexion
 mysqli_close($conectar);


 ?>