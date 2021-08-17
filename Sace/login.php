<!DOCTYPE html>
<html>
<head>
  <title>Alumnos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="icon" type="image/jpg" href="imagenes/icono.png">
  <script type="text/javascript" src="js/valid.js"></script>

</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="box" onsubmit="return validarFormulario()" method="post">
<!--<form class="box" action="login/loguear.php" method="POST">-->
  <h1>ACCESO ALUMNOS</h1>
  <input type="text" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="correo" placeholder="introduce un correo" required/>
  <input type="password" name="password" placeholder="introduce el password " minlength="8" maxlength="30" required/>
  <!--<input type="submit" name="" value="Acceder">-->

  <input type="submit"  name="submit" value="Acceder" >
  <?php include("login/loguear.php");
 if ($errores): ?>
       <ul style="color: #f00;">
          <?php foreach ($errores as $error): ?>
             <li> <?php echo $error ?> </li>
          <?php endforeach; ?>
       </ul>
    <?php endif; ?>




</form>

</body>
</html>