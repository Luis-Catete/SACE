<!DOCTYPE html>
<html>
<head>
	<title>Cursos disponibles </title>
	<meta charset="utf-8">
	<link rel="icon" type="image/jpg" href="imagenes/icono.png">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/curso.css"> 
</head>
<body>


<!--Barra de navegación hecha con bootstrap-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="imagenes/logotecG.png" width="50" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.php">REGRISTRARSE</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="vista.html">INICIAR SESIÓN</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">NOSOTROS</a>
      </li>
    </ul>
  </div>
</nav>

<br>
<h1>CURSOS DISPONIBLES </h1>

<!--Tablas de cursos -->
<center>
	<div class="table-responsive">
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col"></th>
			<th >Nombre del curso</th>
			<th>Fecha de inicio</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include "login/conexion.php";

		$query= "SELECT * FROM info_cursos";
		$resultado=$conectar->query($query);
		while ($row= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>
			<td><img height=100px; src="data:image/png;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
			<td class="text-uppercase"><?php echo $row["tipo"]." ".$row["nombre_curso"]; ?></td>
			<td><?php echo $row["fecha"]; ?></td>
		</tr>


		<?php
		}
 
		?>
	</tbody>
</table>
</div>
</center>

<style type="text/css">
	table{
		margin-top: -70px;
	}
</style>

</body>
</html>