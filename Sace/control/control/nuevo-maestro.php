<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

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

</head>
<body>



<form action="registro_maestro.php" method="POST" enctype="multipart/form-data">
<center><h1>REGISTRO DE MAESTROS</h1></center>

<div class="form-group">
  <p>	
    NOMBRE <input type="text" class="form-control" name="nombre"  required/>
    Apellido Paterno <input type="text" class="form-control" name="apellidoP"  required/>
    Apellido Materno <input type="text" class="form-control" name="apellidoM"  required/>
    <div class="row">
      <div class="col">
	GRADO ACADEMICO  <select id="inputState" class="form-control" name="gradoacademico">
  <option value="TSU.">Técnico Superior Universitario</option> 
  <option value="Lic." selected>Licenciatura</option>
  <option value="Ing.">Ingenieria</option>
  <option value="Mtr.">Maestria</option>
  <option value="M.C.">Maestria en Ciencias</option>
  <option value="Ph.D">Doctorado</option>
</select>
</div>
<div class="col">
	TELEFONO <input type="text" class="form-control" name="telefono" minlength="10" maxlength="15" required/>
</div>
</div>
<div class="row">
      <div class="col">
	Cargo <select id="inputState" class="form-control" name="cargo">
  <option value="Administrador">Administrador</option> 
  <option value="Maestro" selected>Maestro</option>
</select>
</div>
<div class="col">
	Correo<input type="email" class="form-control" name="correo" placeholder="ejemplo@ejemplo.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
</div>
</div>
<div class="row">
      <div class="col">
	Password<input type="password" class="form-control" name="clave" minlength="8" maxlength="30" required/></div>
  <div class="col">
	Confirmar Password<input type="password" class="form-control" name="clave" minlength="8" maxlength="30" required/ ></div></div>	
</p>
</div>
<center>
  <input class="btn btn-dark" role="button" type="reset" value="RESETEAR">
  <input class="btn btn-success" role="button" type="submit" value="GUARDAR">
</center>
	
</form>




</body>
</html>