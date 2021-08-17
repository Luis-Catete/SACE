
<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $identificador= $_POST['id'];

 $q= "SELECT * FROM registro_cursos WHERE id_curso='$identificador'";
    $resultado=$conectar->query($q);
          
?>

<!DOCTYPE html>
<html>
<head>
	<title>Grupos alumnos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/curso.css"> 
</head>
<body>

<center><h1>Grupos  </h1>
<div class="table-responsive">
<table class="table">
	<thead class="thead-dark">
		<tr>
			<th >N° de control</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Estatus</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		//mientras encuentre resultado imprimir
		while ($r= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>
			
			<td><?php echo $r["num_control"]; ?></td>
			<td class="text-uppercase"><?php echo $r["nombre"]; ?></td>
			<td class="text-uppercase"><?php echo $r["apellidos"]; ?></td>
			<td class="text-uppercase"><?php 
            if (empty($r["estatus_alumno"])) {
            	echo "SIN ACREDITAR";
            }else {
            	echo $r["estatus_alumno"];
            }
			 ?></td>
			<td>
				<!--Envio de datos a taves de un boton con metodo post-->
                 <form action="../Cursos/acreditado.php" method="POST">
                 	<input type="hidden" name="idcurso" value="<?php echo $identificador?>" >
                     <input type="hidden" name="id" value="<?php echo $r["num_control"]?>" ><!--envio de datos-->
                 	<input type="submit" class="btn btn-outline-success" name="" value="Acreditar">
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
