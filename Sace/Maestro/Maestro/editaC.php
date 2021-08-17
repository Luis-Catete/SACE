<?php 
include('../login/session.php');
$usuario= $_SESSION['login_user'] ;

//consulta para obtener el id del maestro
$query= "SELECT * FROM maestros WHERE correo='$usuario'";
    $result=$conectar->query($query);
    $row= $result->fetch_assoc();
    $idprofe=$row['id'];

//Recibir los datos y almacenarlos en variables
 $idcurso=$_POST['id'];
 $Nombre_curso=$_POST['nombre_curso'];
 $descripcion=$_POST['descripcion'];
 $tipocurso=$_POST['tipo_curso']; 
 $modalidad=$_POST['modalidad'];
 $Area=$_POST['area'];
 $lugar=$_POST['lugar'];
 $costo=$_POST['costo'];
 $fecha=$_POST['fecha'];
 $fechafin=$_POST['fechafin'];
 $cupo=$_POST['cupo'];
 $hora=$_POST['hora'];
 $imagen=addslashes(file_get_contents($_FILES ['Imagen']['tmp_name']));
 $archivo=addslashes(file_get_contents($_FILES ['archivo']['tmp_name']));
 

//consulta sql para insertar datos
 $insertar="UPDATE info_cursos SET Nombre_curso='$Nombre_curso',tipo='$tipocurso',modalidad='$modalidad',imagen='$imagen',area='$Area',fecha='$fecha',fecha_terminacion='$fechafin',descripcion='$descripcion',costo='$costo',lugar='$lugar',id_maestro='$idprofe',capacidad='$cupo',pdf='$archivo',hora='$hora' WHERE id='$idcurso'";
 //ejecutar consulta
 $resultado=mysqli_query($conectar,$insertar);

 if (!$resultado) {
 	echo "error al Actualizar";
 }else{
    header("location: ../Maestro/r_e.php");
 }
 //cerrar conexion
 mysqli_close($conectar);


 ?>
