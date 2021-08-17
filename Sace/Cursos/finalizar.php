<?php 
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;


    $identificador= $_POST['id'];

    $finalizar="finalizado";

		//consulta sql para insertar datos
 $insertar="UPDATE info_cursos SET estatus_curso='$finalizar' WHERE id='$identificador'";
 //ejecutar consulta
 $resultado=mysqli_query($conectar,$insertar);

 if (!$resultado) {
 	echo "error al registrarse";
 }else{
    header("location: c_finalizado.php");
 }
 //cerrar conexion
 mysqli_close($conectar);


?>
