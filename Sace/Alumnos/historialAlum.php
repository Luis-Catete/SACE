<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $q= "SELECT * FROM alumnos WHERE correo='$usuario'";
    $resultado=$conectar->query($q);
    $r= $resultado->fetch_assoc();
          
?>

<!DOCTYPE html>
<html>
<head>
	<title>Historial de curso</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/curso.css"> 
</head>
<body>

<center><h1>Historial de Cursos </h1>
<div class="table-responsive">
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th >Tipo</th>
			<th>Nombre</th>
			<th>Estatus</th>
		</tr>
	</thead>
	<tbody>
		<?php
		
              
        $numc= $r['Num_control'];

		$query= "SELECT * FROM registro_cursos WHERE num_control='$numc'";
		$resultado=$conectar->query($query);
       

		while ($row= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>
			
			<td><?php echo $row["tipo_curso"]; ?></td>
			<td class="text-uppercase"><?php echo $row["nombre_curso"]; ?><br>
			</td>
			<td><?php 

			if (empty($row["estatus_alumno"])) {
				echo "No Acreditado";
			}else{
				echo ucwords($row["estatus_alumno"]);
			}

			 ?></td>
			
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
		
	}
</style>

</body>
</html>
