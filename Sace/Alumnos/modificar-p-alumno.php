<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 //consulta para obtener el nombre del maestro
 $query= "SELECT * FROM alumnos WHERE correo='$usuario'";
		$resultado=$conectar->query($query);
		$row= $resultado->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo maestro</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="../imagenes/icono.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/valid.js"></script>

</head>
<body>



<form action="moficaAlum.php"  onsubmit="return validarFormulario()" method="POST" enctype="multipart/form-data" >
<center><h1>REGISTRO DE ALUMNOS</h1>

<div class="form-group col-md-8">
  <p>	
    NOMBRE <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row["Nombre"]?>" required/>
    Apellido Paterno <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $row["Apellidos"]?>" required/>
    <div class="row">
     
<div class="col">
	Numero de control <input type="text" class="form-control" name="numcontrol" readonly=»readonly» value="<?php echo $row["Num_control"]?>" required/>
</div>

<div class="col">
	Correo<input type="email" class="form-control" name="correo" placeholder="ejemplo@ejemplo.com" value="<?php echo $row["correo"]?>" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
</div>
</div>
<div class="row">
      <div class="col">
	Password<input type="password" class="form-control" name="password" id="password" value="<?php echo $row["password"]?>"  required/></div>
  <div class="col">
	Confirmar Password<input type="password" class="form-control" name="password1" id="password1" value="<?php echo $row["password"]?>" required/ ></div></div>	
</p>
</div>
  <input class="btn btn-dark" role="button" type="reset" value="RESETEAR">
  <input class="btn btn-success" role="button" type="submit" name="submit" value="GUARDAR">
</center>
	
</form>




</body>
</html>