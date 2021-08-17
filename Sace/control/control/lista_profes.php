<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $q= "SELECT * FROM maestros";
    $resultado=$conectar->query($q);
    //$row= $resultado->fetch_assoc();
          
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/curso.css"> 
</head>
<body>

<center><h1>LISTA DE MAESTROS</h1>
<div class="table-responsive">
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Telefono</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		while ($row= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>
			
			<td class="text-uppercase"><?php echo $row["grado_academico"]." ".$row["nombre"]; ?></td>
			<td class="text-uppercase"><?php echo $row["apellidoP"]." ".$row["apellidoM"]; ?></td>
			<td class="text-uppercase"><?php echo $row["telefono"]; ?></td>
			<td><!--Envio de datos a taves de un boton con metodo post-->
                 <form action="perfiles_maestro.php" method="POST">
                     <input type="hidden" name="id" value="<?php echo $row["id"]?>" ><!--envio de datos-->
                 	<input type="submit" class="btn btn-outline-success" name="" value="Ver Perfil">
                 </form></td>
		</tr>


		<?php
		}
 
		?>
	</tbody>
</table>
</div>
</center>

<style type="text/css">
	.table{
		/*margin-top: -100px;*/
	}
</style>

</body>
</html>
