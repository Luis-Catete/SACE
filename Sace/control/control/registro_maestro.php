<?php 
include 'conexion.php';
include('../login/session.php');
$usuario= $_SESSION['login_user'] ;

//Recibir los datos y almacenarlos en variables

 $nombre=$_POST['nombre'];
 $paterno=$_POST['apellidoP'];
 $materno=$_POST['apellidoM']; 
 $gacademico=$_POST['gradoacademico'];
 $telefono=$_POST['telefono'];
 $cargo=$_POST['cargo'];
 $correo=$_POST['correo'];
 $clave=$_POST['clave'];
 

//consulta sql para insertar datos
 $insertar="INSERT INTO maestros(nombre,apellidoP,apellidoM,telefono,grado_academico,cargo,correo,clave) VALUES('$nombre','$paterno','$materno','$telefono','$gacademico','$cargo','$correo','$clave')";
 //ejecutar consulta
 $resultado=mysqli_query($conectar,$insertar);

 if (!$resultado) {
 	echo "error al registrarse";
 }else{
    header("location: ../Maestro/r_e.php");
 }
 //cerrar conexion
 mysqli_close($conectar);


 ?>
