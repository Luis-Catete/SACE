<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;
 $idcurso=$_POST['idcurso']; //id del curso


 //Recibir los datos y almacenarlos en variables parte del alumno
$query= "SELECT * FROM alumnos,info_cursos WHERE correo='$usuario' AND id='$idcurso'";
		$res=$conectar->query($query);
		$row= $res->fetch_assoc();

 $Numcontrol=$row['Num_control'];
 $nombre=$row['Nombre'];
 $apellidos=$row['Apellidos']; 
 $nombrecurso=$row['nombre_curso'];
 $tipocurso=$row['tipo'];
 
//consulta sql para insertar datos
 $insert="INSERT INTO registro_cursos(num_control,nombre,apellidos,nombre_curso,id_curso,tipo_curso) VALUES('$Numcontrol','$nombre','$apellidos','$nombrecurso','$idcurso','$tipocurso')";

//consulta para ver que no este inscrito
//`registro_cursos`.`num_control` = 12345679 AND `registro_cursos`.`nombre` = \'juan esteban\' AND `registro_cursos`.`apellidos` = \'catete fernandez\' AND `registro_cursos`.`id_curso` = 4"?

$q= "SELECT * FROM registro_cursos WHERE num_control='$Numcontrol' AND nombre='$nombre' AND apellidos='$apellidos' and id_curso='$idcurso'";
		$R=$conectar->query($q);


 //ejecutar consulta
 if(mysqli_num_rows($R)>0){
	 // Si es mayor a cero imprimimos que ya existe el usuario
  	header("location: yaregistrado.php");
 }else{
 	$resultado=mysqli_query($conectar,$insert);//varible que inserta los datos

 	$in="UPDATE info_cursos SET inscritos=inscritos+1 WHERE id='$idcurso'";
 	$add=$conectar->query($in);

 if (!$resultado) {
 	echo "error al registrarse";
 }else{
    header("location: ../Maestro/r_e.php");
 }
 }
 
 //cerrar conexion
 mysqli_close($conectar);


?>