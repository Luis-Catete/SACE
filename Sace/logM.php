<!DOCTYPE html>
<html>
<head>
	<title>Maestros</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="imagenes/icono.png"> 
	<link rel="stylesheet" type="text/css" href="css/logM.css">
	<script type="text/javascript" src="js/valid.js"></script>

</head>
<body>

<!--<form class="box" action="login/loguearM.php" method="POST">-->
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="box" onsubmit="return validarFormulario()" method="post">
  <h1>ACCESO MAESTROS</h1>
  <input type="text" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="correo" placeholder="introduce un correo" required/>
  <input type="password" name="password" placeholder="introduce el password " minlength="8" maxlength="30" required/>
  <!--<input type="submit" name="" value="login">-->

  <input type="submit"  name="submit" value="Acceder" >
  <?php include("login/loguearM.php");
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