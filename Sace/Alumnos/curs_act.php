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
	<title>Cursos en proceso</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/curso.css"> 
</head>
<body>

<center><h1>CURSANDO ACTUALMENTE </h1>
<div class="table-responsive">
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th >Tipo</th>
			<th>Nombre</th>
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
			<td class="text-uppercase"><?php echo $row["tipo_curso"]." ".$row["nombre_curso"]; ?><br>
			</td>
			
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
