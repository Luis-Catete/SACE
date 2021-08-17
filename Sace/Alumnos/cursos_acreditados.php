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

<center><h1>CURSOS ACREDITADOS </h1>
<div class="table-responsive">
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th >Tipo</th>
			<th>Nombre</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		
              
        $numc= $r['Num_control'];
        $stat="acreditado";

        //consulta para saber que cursos estan acreditados
		$query= "SELECT * FROM registro_cursos WHERE num_control='$numc' AND estatus_alumno='$stat'";
		$resultado=$conectar->query($query);
        //$col=$resultado->fetch_assoc();
       

		while ($row= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>
			
			<td><?php echo $row["tipo_curso"]; ?></td>
			<td class="text-uppercase"><?php echo $row["nombre_curso"]; ?><br>
			</td>
			<td><!--Envio de datos a taves de un boton con metodo post-->
                 <form action="../Cursos/pdf/index.php" method="POST">
                     <input type="hidden" name="id" value="<?php echo $row["id_curso"]?>" ><!--envio de datos-->
                 	<input type="submit" class="btn btn-outline-success" name="" value="VER CONSTANCIA">
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
