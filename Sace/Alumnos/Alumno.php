<?php
include('../login/session.php');

 $usuario= $_SESSION['login_user'] ;

 $query= "SELECT * FROM alumnos WHERE correo='$usuario'";
    $resultado=$conectar->query($query);
    $row= $resultado->fetch_assoc();
          
?>


<!DOCTYPE html>
<html>
<head>
	<title>Alumno</title>
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
        <a class="nav-link" href="perfil.php" target="pagina">Perfil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cursos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cursos_acreditados.php" target="pagina">Cursos acreditados</a>
          <!--Mandamos variable para identificar el usuario-->
          <a class="dropdown-item"  href="curs_act.php" target="pagina">Cursos en proceso</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="historialAlum.php" target="pagina">Historial de cursos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="curso_A.php" target="pagina">Cursos Disponibles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login/cerrar_sesion.php">Cerrar Sesión</a>
      </li>
    </ul>
        <a class="nav-link disabled" href="#" ><?php echo "Alumno: ".$row["Nombre"]?></a>
  </div>
</nav>
</div>

<h1></h1>

<!--FRAME para mostrar las diferentes paginas -->
<center><div class="frame">
<iframe name="pagina" src="../acceso.php" frameborder="0" ></iframe>
</div>
</center>

<style type="text/css">
  iframe{
    width: 80%;
    height: 510px;
  }
  .nav-link{
   text-transform: capitalize;
  }

</style>



</body>
</html>