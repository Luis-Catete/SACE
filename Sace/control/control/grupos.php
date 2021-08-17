<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $q= "SELECT * FROM info_cursos ";
    $resultado=$conectar->query($q);
    //$row= $resultado->fetch_assoc();
          
?>

<!DOCTYPE html>
<html>
<head>
	<title>Grupos</title>
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
			<th >Tipo</th>
			<th>Nombre</th>
			<th>Lugar</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		
              
        //$numc= $r['id'];

		//$query= "SELECT * FROM info_cursos WHERE id_maestro='$numc'";
		//$resultado=$conectar->query($query);
        //$col=$resultado->fetch_assoc();
       


		while ($row= $resultado->fetch_assoc()) {
					
		?>
		<br>
		<tr>
			
			<td><?php echo $row["tipo"]; ?></td>
			<td class="text-uppercase"><?php echo $row["nombre_curso"]; ?></td>
			<td><?php echo $row["lugar"]; ?></td>
			<td>
				<!--Envio de datos a taves de un boton con metodo post-->
                 <form action="../Maestro/lista_grupos.php" method="POST">
                     <input type="hidden" name="id" value="<?php echo $row["id"]?>" ><!--envio de datos-->
                 	<input type="submit" class="btn btn-outline-success" name="" value="Ver grupo">
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
