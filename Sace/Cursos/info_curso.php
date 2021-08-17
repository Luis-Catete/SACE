<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;


        $identificador= $_POST['id'];

		$query= "SELECT * FROM info_cursos WHERE id='$identificador'";
		$resultado=$conectar->query($query);
		$rows= $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>INFORMACIÓN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"> 
</head>
<body>

<center>
<img height=100px; src="data:image/png;base64,<?php echo base64_encode($rows['imagen']); ?>">
<h1><?php echo $rows["tipo"]; ?></h1>
<h1><?php echo "'".$rows["nombre_curso"]."'"; ?></h1>
<h2><?php echo $rows["descripcion"]; ?></h2>
<h3>Costo: <?php 

//variable para cambiar el costo a gratis si este es menor a 1
if ($rows["costo"]<1) {
echo "GRATIS";	
}else{
echo "$".$rows["costo"];	
} ?></h3>
<h3>Fecha de inicio: <?php echo $rows["fecha"]." Hora: ".$rows["hora"]; ?> </h3>
<h3>Modalidad:  <?php
echo $rows["modalidad"];
if ($rows["modalidad"]=="presencial") {
echo " _ "."Lugar:".$rows["lugar"];	
} ?> </h3>

<form action="descarga.php" method="POST" ENCTYPE="multipart/form-data">
<input type="hidden" name="idcurso" value="<?php echo $rows["id"]?>" >
<input type="submit" class="btn btn-outline-dark" name="" value="DESCARGA PDF">
</form>
<form action="../Cursos/inscripcion.php" method="POST">
	<input type="hidden" name="idcurso" value="<?php echo $rows["id"]?>" >
	<input type="submit" class="btn btn-outline-success" name="" value="INSCRIBIRSE">
</form>

</center>

</h1>


</body>
</html>