<?php
include('../login/session.php');
$usuario= $_SESSION['login_user'] ;

//Recibir los datos y almacenarlos en variables

$identificador=$_POST['idprofe'];

//consulta sql para insertar datos
 $borrar="DELETE FROM maestros WHERE id='$identificador'";

 //ejecutar consulta
 $resultado=mysqli_query($conectar,$borrar);

 if (!$resultado) {
 	echo "error al Borrar";
 }else{
    header("location: lista_profes.php");
 }
 //cerrar conexion
 mysqli_close($conectar);


 ?>