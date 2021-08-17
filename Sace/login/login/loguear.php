<?php

include("conexion.php");
   session_start();


$errores = array();
//limpiar valores de correo
if (filter_has_var(INPUT_POST,'correo')) {
  $correo=$_POST['correo'];
    //limpiar campos
    $correo=filter_var($correo,FILTER_SANITIZE_NUMBER_INT);
 
}
//limpiar valores de password
if (filter_has_var(INPUT_POST,'password')) {
  $password=$_POST['password'];
    //limpiar campos
    $password=filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
 
}

 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // envio de username y password con post
      
//validacion de correo
if (empty($correo)) {
        $errores[] = "El email es requerido <br>";
    } else {
        // Queremos que el email tenga un formato adecuado
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $correo)) {
            $errores[] = "Formato de email incorrecto";
        }
    }
    //validacion de contraseña
    if (empty($password)) {
        $errores[] = "El password es requerido <br>";
    } else {
        // permitimos solo letras y numeros
        if (!preg_match("/^[a-zA-Z0-9_]+/",$password)) {
            $errores[] = "No se permiten caracteres especiales como contraseña";
        }
    }



      //mysqli_real_escape_string escapa los valores con simbolos para evitar inyeccion sql 
      $myusername = mysqli_real_escape_string($conectar,$_POST['correo']);
      $mypassword = mysqli_real_escape_string($conectar,$_POST['password']); 
      
      $sql = "SELECT Nombre FROM alumnos WHERE correo = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conectar,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
    // si el resultado es igual a 1 accede a la pagina si no no 
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: Alumno/Alumno.php");

      }else {
         //$error = "Your Login Name or Password is invalid";
        //header("location:login.php");
        $errores[] = "email o contraseña incorrecta";
      }
   }
?>