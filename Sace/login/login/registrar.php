<?php 
include 'conexion.php';

$errores = array();
if(isset($_POST['submit'])) {
	

//sanitizacion de valores

if (filter_has_var(INPUT_POST,'nombre')) {
	$nombre=$_POST['nombre'];
    //limpiar campos
    $nombre=filter_var($nombre,FILTER_SANITIZE_SPECIAL_CHARS);
 
}
if (filter_has_var(INPUT_POST,'apellidos')) {
	$apellidos=$_POST['apellidos'];
    //limpiar campos
    $apellidos=filter_var($apellidos,FILTER_SANITIZE_SPECIAL_CHARS);
 
}
if (filter_has_var(INPUT_POST,'num_control')) {
	$num_control=$_POST['num_control'];
    //limpiar campos
    $num_control=filter_var($num_control,FILTER_SANITIZE_NUMBER_INT);
 
}
if (filter_has_var(INPUT_POST,'correo')) {
	$correo=$_POST['correo'];
    //limpiar campos
    $correo=filter_var($correo,FILTER_SANITIZE_EMAIL);
 
}
if (filter_has_var(INPUT_POST,'password')) {
	$password=$_POST['password'];
    //limpiar campos
    $password=filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
 
}

	//requerimos el nombre
    if(empty($nombre))	{
         
         $errores[]= " El nombre es requerido <br>";
    }else{
    // Queremos que el nombre de usuario sólo tenga letras
    if (!preg_match("/^[a-zA-Z]+/",$nombre)) {
      $errores[] = "Sólo se permiten letras como nombre de usuario <br>";
      }
    }
     if(empty($apellidos))	{    
         $errores[]= " El apellidos es requerido <br>";
    }else{
        // Queremos que el nombre de usuario sólo tenga letras
    if (!preg_match("/^[a-zA-Z]+/",$apellidos)) {
      $errores[] = "Sólo se permiten letras como apellido <br>";
      }
    }
     if(empty($num_control))	{     
         $errores[]= " El numero de control es requerido <br>";
        }else{
            //solo letras y numeros
            if (!preg_match("/^[0-9]+/",$num_control)) {
      $errores[] = "No se permiten caracteres especiales como numero de control<br>";
      }
        }
    
    // Requerimos el email también:
    if (empty($correo)) {
        $errores[] = "El email es requerido <br>";
    } else {
        // Queremos que el email tenga un formato adecuado
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $correo)) {
            $errores[] = "Formato de email incorrecto";
        }
    }
    //Requerimos password
    if (empty($password)) {
        $errores[] = "El password es requerido <br>";
    } else {
        // permitimos solo letras y numeros
        if (!preg_match("/^[a-zA-Z0-9_]+/",$password)) {
            $errores[] = "No se permiten caracteres especiales como contraseña";
        }
    }
    if (!$errores) {
    	
    	//consulta sql para insertar datos
        $insertar="INSERT INTO alumnos(Nombre,Apellidos,Num_control,correo,password) VALUES('$nombre','$apellidos','$num_control','$correo','$password')";

        $q= "SELECT * FROM alumnos WHERE correo='$correo'";
        $R=$conectar->query($q);

        if (mysqli_num_rows($R)>0) {
            $errores[] = "El correo ya se encuentra registrado";
        }else{
        //ejecutar consulta
        $resultado=mysqli_query($conectar,$insertar);
 
        if (!$resultado) {
 	    header("location:error-registro.php");
        }else{
 	    header("location:r-exitoso.php");
        }
        //cerrar conexion
        mysqli_close($conectar);
	    exit();
    }
}
}

 ?>
