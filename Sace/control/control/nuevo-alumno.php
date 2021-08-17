<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"> 
  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/jquery-3.4.1.min.js"></script>

  
</head>
<body>


<form action="login/registrar.php"  onsubmit="return validar()" method="post">
  <center><h1>Registro de Alumnos</h1></center><br>
  <div class="row">
    <div class=" col-md-4" >
  <label>Nombre</label> 
  <input type="text" class="form-control" name="nombre" placeholder="nombre completo" required/>
</div>
<div class="col-md-4">  
  <label>Apellidos</label> 
  <input type="text" class="form-control" name="apellidos" placeholder="apellidos" required/>
  </div><br>
</div>
<div class="row">
  <div class="col-md-3">
  <label>NUMERO DE CONTROL</label> 
  <input type="text" class="form-control" name="num_control"  placeholder="Numero de control" required/>
  </div>
  <div class="col-md-5">
  <label>CORREO</label>
  <input type="text" class="form-control" name="correo" placeholder="ejemplo@ejemplo.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>
  </div>
  </div>
  <div class="row">
  <div class="col-md-4">
  <label>PASSWORD</label>
  <input type="password" class="form-control" name="password" placeholder="password" required/>
  </div>
  <div class="col-md-4">
  <label>CONFIRMAR PASSWORD</label>
  <input type="password" class="form-control" name="password" placeholder="password" required/>
  </div>
  </div><br><center>
  <input type="submit" class="btn btn-info" onclick="validar()" value="Registrarse" >
  </center>
  </form>


<!--centrado de login-->
<style >
  .row{
    margin-left: 350px;
  }
 
</style>

</body>
</html>