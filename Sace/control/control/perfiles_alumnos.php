<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $ncontrol=$_POST['ncontrol'];

 $query= "SELECT * FROM alumnos WHERE Num_control='$ncontrol'";
		$resultado=$conectar->query($query);
		$row= $resultado->fetch_assoc();
					
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<p>
<form class="box" action="" method="post">
  <h1>PERFIL</h1>
  
  NOMBRE<input type="text" name="nombre" class="form-control" readonly=»readonly» value="<?php echo $row["Nombre"]?>" required/>
  Apellidos<input type="text" name="apellidos" class="form-control" readonly=»readonly» value="<?php echo $row["Apellidos"]?>" required/>
  NUMERO DE CONTROL<input type="text" name="num_control"  class="form-control" readonly=»readonly» value="<?php echo $row["Num_control"]?>" required/>
  CORREO<input type="text" name="correo" class="form-control" readonly=»readonly» value="<?php echo $row["correo"]?>" required/>
  PASSWORD<input type="password" name="password" class="form-control" readonly=»readonly» value="<?php echo $row["password"]?>"required/>
  </p>
  <center><input class="btn btn-success" role="button" type="submit"  value="guardar"></center>
</form>


</body>
</html>