<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;
//consulta para obtener el nombre del maestro
$query= "SELECT * FROM maestros WHERE correo='$usuario'";
    $resultado=$conectar->query($query);
    $row= $resultado->fetch_assoc();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Maestro Administrador</title>
	<meta charset="utf-8">

	<link rel="icon" type="image/jpg" href="../imagenes/icono.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="../css/est.css">

	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>




<!--Barra de navegación con bootstrap-->
<div class="navegacion">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" ><img src="../imagenes/logotecG.png" id="logotec">Tec Victoria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../acceso.php" target="pagina">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Maestro/perfilM.php" target="pagina">Perfil</a>
      </li>
      <!--APARTADO DE CURSOS-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cursos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Maestro/Nuevo_curso.php" target="pagina">Registrar nuevo curso</a>
          <a class="dropdown-item" href="cursos-actuales.php" target="pagina">Cursos actuales</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../Maestro/historial.php" target="pagina">Historial de cursos</a>
          <a class="dropdown-item" href="../Maestro/curso_maestro.php" target="pagina">Mis cursos</a>
          <a class="dropdown-item" href="../Maestro/est-alumnos.php" target="pagina">Calificar Alumnos</a>
        </div>
      </li>
      <!--APARTADO DE MAESTROS-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Maestros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="nuevo-maestro.php" target="pagina">Registrar nuevo Maestro</a>
          <a class="dropdown-item" href="lista_profes.php" target="pagina">Lista de maestros</a>
      </li>
       <!--APARTADO DE ALUMNOS-->
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alumnos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="lista_alumnos.php" target="pagina">Lista de alumnos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="grupos.php" target="pagina">Alumnos por Grupos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login/cerrar_sesion.php">Cerrar sesion</a>
      </li>
    </ul>
    <a class="nav-link disabled" href="#" ><?php echo "Maestro Administrador: ".$row["nombre"]?></a>
  </div>
</nav>
</div>
<br>




<!--FRAME para mostrar las diferentes paginas -->
<center><div class="frame">
<iframe name="pagina" src="../acceso.php" frameborder="0" ></iframe>
</div>
</center>

<style type="text/css">
  iframe{
    width: 75%;
    height: 550px;
  }
</style>


</body>
</html>