
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/jpg" href="imagenes/icono.png">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/valid.js"></script>
 
</head>
<body>

<!--Barra de navegación hecha con bootstrap-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="imagenes/logotecG.png" width="50" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">INICIO </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="registro.php">REGRISTRARSE<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="vista.html">INICIAR SESIÓN</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">NOSOTROS</a>
      </li>
    </ul>
  </div>
</nav>
  

<div>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  onsubmit="return validarFormulario()" method="post">
  <center><h1>Registro de Alumnos</h1></center><br>
  <div class="row">
    <div class=" col-md-4" >
  <label>Nombre</label> 
  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre completo" required/ >
</div>
<div class="col-md-4">  
  <label>Apellidos</label> 
  <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="apellidos" required/ >
  </div><br>
</div>
<div class="row">
  <div class="col-md-3">
  <label>NUMERO DE CONTROL</label> 
  <input type="text" class="form-control" name="num_control"  id="num_control" placeholder="Numero de control" minlength="8" maxlength="8" required/>
  </div>
  <div class="col-md-5">
  <label>CORREO</label>
  <input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo@ejemplo.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
  </div>
  </div>
  <div class="row">
  <div class="col-md-4">
  <label>PASSWORD</label>
  <input type="password" class="form-control" name="password" id="password" placeholder="password" minlength="8" maxlength="30" required/>
  </div>
  <div class="col-md-4">
  <label>CONFIRMAR PASSWORD</label>
  <input type="password" class="form-control" name="password1" id="password1" placeholder="password" minlength="8" maxlength="30" required >
  </div>
  </div><br><center>
  <input type="submit" class="btn btn-info"  name="submit" value="Registrarse" >
  <?php include("login/registrar.php");
 if ($errores): ?>
       <ul style="color: #f00;">
          <?php foreach ($errores as $error): ?>
             <li> <?php echo $error ?> </li>
          <?php endforeach; ?>
       </ul>
    <?php endif; ?>

  </center>
  </form>
</div>

<!--centrado de login-->
<style >
  .row{
    margin-left: 350px;
  }
 
</style>

</body>
</html>