<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $q= "SELECT * FROM maestros WHERE correo='$usuario'";
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

<center><h1>IMPARTIENDO ACTUALMENTE </h1>
<div class="table-responsive">
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th >Tipo</th>
			<th>Nombre</th>
			<th>Lugar</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		

        $numc= $r['id'];
        $finalizar="finalizado";
        $vacio="";

		$query= "SELECT * FROM info_cursos WHERE id_maestro='$numc' AND estatus_curso='$vacio' AND fecha>CURDATE()";
		$resultado=$conectar->query($query);
        //$col=$resultado->fetch_assoc();

        $insertar="UPDATE info_cursos SET estatus_curso='$finalizar' WHERE id_maestro='$numc' AND estatus_curso='$vacio' AND fecha<CURDATE()";
       //ejecutar consulta
       $res=mysqli_query($conectar,$insertar);
 
		while ($row= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>
			
			<td><?php echo $row["tipo"]; ?></td>
			<td class="text-uppercase"><?php echo $row["nombre_curso"]; ?></td>
			<td><?php echo $row["lugar"]; ?></td>
			<td>
				<!--Envio de datos a taves de un boton con metodo post-->
                 <form action="../Cursos/finalizar.php" method="POST">
                     <input type="hidden" name="id" value="<?php echo $row["id"]?>" ><!--envio de datos-->
                 	<input type="submit" class="btn btn-outline-success" name="" value="Finalizar Curso">
                 </form>
			</td>
			<td>
				<!--Envio de datos a taves de un boton con metodo post-->
                 <form action="editarCurso.php" method="POST">
                     <input type="hidden" name="id" value="<?php echo $row["id"]?>" ><!--envio de datos-->
                 	<input type="submit" class="btn btn-outline-warning" name="" value="Editar Curso">
                 </form>
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
		/*margin-top: -100px;*/
	}
</style>

</body>
</html>
