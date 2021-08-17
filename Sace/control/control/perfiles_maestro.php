<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $identificador=$_POST['id'];

//consulta para obtener el nombre del maestro
 $query= "SELECT * FROM maestros WHERE id='$identificador'";
		$resultado=$conectar->query($query);
		$row= $resultado->fetch_assoc();
					
?>

<!DOCTYPE html>
<html>
<head>
  <title>Perfil maestro</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/jpg" href="../imagenes/icono.png">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/jquery-3.4.1.min.js"></script>

</head>
<body>



<form action="delete-maestro.php" method="POST" enctype="multipart/form-data">
<center><h1>REGISTRO DE MAESTROS</h1></center>

<div class="form-group">
  <p> 
    NOMBRE <input type="text" class="form-control" name="nombre" readonly=»readonly» value="<?php echo $row["nombre"]?>" required/>
    Apellido Paterno <input type="text" class="form-control" name="apellidoP" readonly=»readonly» value="<?php echo $row["apellidoP"]?>" required/>
    Apellido Materno <input type="text" class="form-control" name="apellidoM" readonly=»readonly» value="<?php echo $row["apellidoM"]?>" required/>
    <div class="row">
     
<div class="col">
  TELEFONO <input type="text" class="form-control" name="telefono" readonly=»readonly» value="<?php echo $row["telefono"]?>" required/>
</div>


<div class="col">
  Correo<input type="email" class="form-control" name="correo" readonly=»readonly» placeholder="ejemplo@ejemplo.com" value="<?php echo $row["correo"]?>" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
</div>
</div>
<div class="row">
      <div class="col">
  Password<input type="password" class="form-control" name="clave" readonly=»readonly» value="<?php echo $row["clave"]?>"  required/></div>
  <div class="col">
  Confirmar Password<input type="password" class="form-control" name="clave" readonly=»readonly» value="<?php echo $row["clave"]?>" required/ ></div></div> 
</p>
</div>
<center>
  <input type="hidden" name="idprofe" value="<?php echo $row["id"]?>" >
  <input class="btn btn-danger" role="button" type="submit" value="Eliminar">
</center>
  
</form>



</body>
</html>