<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 /*consulta para obtener el nombre del maestro
 $query= "SELECT * FROM maestros WHERE correo='$usuario'";
    $resultado=$conectar->query($query);
    $row= $resultado->fetch_assoc();
*/
    $identificador= $_POST['id'];

		$query= "SELECT * FROM info_cursos WHERE id='$identificador'";
		$resultado=$conectar->query($query);
		$rows= $resultado->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cursos</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="../imagenes/icono.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/jquery-3.4.1.min.js"></script>

</head>
<body>


<form action="reactiva.php" method="POST" enctype="multipart/form-data">
<center><h1>REGISTRO DE CURSOS</h1></center>
<div class="form-group">
  <p>	
    NOMBRE DEL CURSO  <input type="text" class="form-control" name="nombre_curso" value="<?php echo $rows['nombre_curso']?>" required/>
    DESCRIPCIÓN DEL CURSO <input type="text" class="form-control" name="descripcion" value="<?php echo $rows['descripcion']?>" required/>
    <div class="row">
      <div class="col">
	TIPO DE CURSO  <select id="inputState" class="form-control" name="tipo_curso">
  <option value="CONFERENCIA">CONFERENCIA</option> 
  <option value="CURSO" selected>CURSO</option>
  <option value="TALLER">TALLER</option>
  <option value="DIPLOMADO">DIPLOMADO</option>
  <option value="SEMINARIO">SEMINARIO</option>
  <option value="CERTIFICACIÓN">CERTIFICACIÓN</option>
  <option value="CONGRESO">CONGRESO</option>
  <option value="SIMPOSIO">SIMPOSIO</option>	
</select>
</div>
<div class="col">
	MODALIDAD <input type="text" class="form-control" name="modalidad" value="<?php echo $rows['modalidad']?>" required/>
</div>
</div>
<div class="row">
      <div class="col">
	AREA <select id="inputState" class="form-control" name="area">
  <option value="ING. SISTEMAS COMPUTACIONALES">ING. SISTEMAS COMPUTACIONALES</option> 
  <option value="ING. CIVIL" selected>ING. CIVIL</option>
  <option value="ING. INFORMATICA">ING. INFORMÁTICA</option>
  <option value="ING. INDUSTRIAL">ING. INDUSTRIAL</option>
  <option value="ING. GESTION EMPRESARIAL">ING. GESTIÓN EMPRESARIAL</option>
  <option value="ING. MECANICA">ING. MECÁNICA</option>
  <option value="ING. ELECTRONICA">ING. ELECTRÓNICA</option>
  <option value="ING. ENERGIAS RENOVABLES">ING. ENERGIAS RENOVABLES</option>
  <option value="LIC. BIOLOGIA">LIC. BIOLOGÍA</option>
</select>
</div>
<div class="col">
	LUGAR  <input type="text" class="form-control" name="lugar"  value="<?php echo $rows['lugar']?>"required/>
</div>
 <div class="col">
  COSTO <input type="number" class="form-control" name="costo" min="0" value="<?php echo $rows['costo']?>" required/></div>
</div>
<div class="row">
      <div class="col">
	HORA <input type="time" class="form-control" name="hora" min="0" value="<?php echo $rows['hora']?>" required/></div>
  <div class=" col">
	FECHA DE INICIO <input type="date" class="form-control" name="fecha" value="2019-11-22" min="2019-10-10" required=""></div>
  <div class=" col">
  FECHA DE TERMINACION <input type="date" class="form-control" name="fechafin" value="2019-11-22" min="2019-01-01" required=""></div>
  <div class="col">
  Cupo<input type="number" class="form-control" name="cupo" min="1" value="<?php echo $rows['capacidad']?>"required/>
  </div>
  </div>
  <center>
	SELECCIONE UNA IMAGEN QUE REPRESENTE EL CURSO <input type="file" name="Imagen"  required/><br>

  SELECCIONE EL ARCHIVO PDF CON EL PROGRAMA
  <input type="file" name="archivo"  required/>
  </center>
	
</p>
</div>
<center>
  <input class="btn btn-dark" role="button" type="reset" value="RESETEAR">
  <input class="btn btn-success" role="button" type="submit" value="GUARDAR">
</center>
	
</form>

</body>
</html>