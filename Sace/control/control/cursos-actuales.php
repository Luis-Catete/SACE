<!DOCTYPE html>
<html>
<head>
	<title>Lista cursos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/curso.css"> 
</head>
<body>

	<center><h1>CURSOS DISPONIBLES </h1></center>

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
		include "../login/conexion.php";


		$query= "SELECT * FROM info_cursos";
		$resultado=$conectar->query($query);
		while ($row= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>
			<td><img height=100px; src="data:image/png;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
			<td class="text-uppercase"><?php echo $row["tipo"]." ".$row["nombre_curso"]; ?><br>
				<!--Envio de datos a taves de un boton con metodo post-->
                 <form action="info_cursos.php" method="POST">
                     <input type="hidden" name="id" value="<?php echo $row["id"]?>" ><!--envio de datos-->
                 	<input type="submit" class="btn btn-outline-success" name="" value="Ver curso">
                 </form>
			</td>
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
		margin-top: -30px;
	}
</style>

</body>
</html>