<?php 
include 'conexion.php';
include('../login/session.php');
$usuario= $_SESSION['login_user'] ;

//Recibir los datos y almacenarlos en variables

 $nombre=$_POST['nombre'];
 $paterno=$_POST['apellidoP'];
 $materno=$_POST['apellidoM']; 
 $telefono=$_POST['telefono'];
 $correo=$_POST['correo'];
 $clave=$_POST['clave'];
 

//consulta sql para insertar datos
 $insertar="UPDATE maestros SET nombre='$nombre',apellidoP='$paterno',apellidoM='$materno',telefono='$telefono',correo='$correo',clave='$clave' WHERE correo='$usuario'";

 //ejecutar consulta
 $resultado=mysqli_query($conectar,$insertar);

 if (!$resultado) {
 	echo "error al actualizar";
 }else{
    header("location: ../Maestro/r_e.php");
 }
 //cerrar conexion
 mysqli_close($conectar);


 ?>
