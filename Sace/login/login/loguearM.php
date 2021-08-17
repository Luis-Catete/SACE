<?php

include("conexion.php");
   session_start();

$errores = array();
//limpiar valores de correo

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

      
      $sql = "SELECT * FROM Maestros WHERE correo = '$myusername' and clave = '$mypassword'";
      $result = mysqli_query($conectar,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);


      $resultado=$conectar->query($sql);
      $admin=$resultado->fetch_assoc();
    // si el resultado es igual a 1 accede a la pagina si no no
      if ($admin["cargo"]== "admin") {
         $_SESSION['login_user'] = $myusername;
         header("location: control/adm.php");
       }else if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: Maestro/Maestro.php");
      }else {
        $errores[] = "Email o contraseña incorrecta";
      }
   }
?>