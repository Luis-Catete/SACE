<?php
include('../login/session.php');
$usuario= $_SESSION['login_user'] ;

//Recibir los datos y almacenarlos en variables

 $nombre=$_POST['nombre'];
 $apellidos=$_POST['apellidos'];
 $numcontrol=$_POST['numcontrol']; 
 $correo=$_POST['correo'];
 $clave=$_POST['password'];
 

//consulta sql para insertar datos
 $insertar="UPDATE alumnos SET Nombre='$nombre',Apellidos='$apellidos',Num_control='$numcontrol',correo='$correo',password='$clave' WHERE correo='$usuario'";

 //actualizacion de la tabla de cursos
 $modcurso="UPDATE registro_cursos SET nombre='$nombre',apellidos='$apellidos' WHERE num_control='$numcontrol'";

 //ejecutar consulta
 $resultado=mysqli_query($conectar,$insertar);
 $res=mysqli_query($conectar,$modcurso);
 if (!$resultado) {
 	echo "error al registrarse";
 }else{
    header("location: ../Maestro/r_e.php");
 }
 //cerrar conexion
 mysqli_close($conectar);


 ?>
