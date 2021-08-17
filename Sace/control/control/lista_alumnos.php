<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $q= "SELECT * FROM alumnos";
    $resultado=$conectar->query($q);
          
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

<center><h1>LISTA DE ALUMNOS</h1>
<div class="table-responsive">
<table class="table">
	<thead class="thead-dark">
		<tr>

			<th>Numero de Control</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		while ($row= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>

			<td class="text-uppercase"><?php echo $row["Num_control"]; ?></td>
			<td class="text-uppercase"><?php echo $row["Nombre"]; ?></td>
			<td class="text-uppercase"><?php echo $row["Apellidos"] ?></td>
			<td><!--Envio de datos a taves de un boton con metodo post-->
                 <form action="perfiles_alumnos.php" method="POST">
                     <input type="hidden" name="ncontrol" value="<?php echo $row["Num_control"]?>" ><!--envio de datos-->
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
		margin-top: -350px;
        
	}
</style>

</body>
</html>
