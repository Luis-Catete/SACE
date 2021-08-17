<?php 
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;


    $identificador= $_POST['id'];
    $curso=$_POST['idcurso'];

    $acreditar="acreditado";

		//consulta sql para insertar datos
 $insertar="UPDATE registro_cursos SET estatus_alumno='$acreditar' WHERE num_control='$identificador' AND id_curso='$curso'";
 //ejecutar consulta

 $resultado=mysqli_query($conectar,$insertar);

 if (!$resultado) {
 	echo "error al registrarse";
 }else{
    header("location: acre.php");
 }
 //cerrar conexion
 mysqli_close($conectar);


?>
