<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesion</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
  </style>

</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center">✌ Bienvenido ✌ </h2>
        <p class="text-center">Inicia sesion</p>
        <form>

          <div class="form-group">
            <label for="usuario">Nombre</label>
            <input class="form-control" type="text" id="user" placeholder="Nombre" required>
          </div>

          <div class="form-group">
            <label for="usuario">Apellido</label>
            <input class="form-control" type="text" id="user" placeholder="Materno" required>
          </div>

          <div class="form-group">
            <label for="usuario">Apellido</label>
            <input class="form-control" type="text" id="user" placeholder="Paterno" required>
          </div>

          <div class="form-group">
            <label for="usuario">Fecha de Nacimiento</label>
            <input class="form-control" type="date" id="user" placeholder="" required>
          </div>

          <div class="form-group">
            <label for="contrasena">Correo Electronico</label>
            <input class="form-control" type="email" id="password" placeholder="Correo" required>
          </div>

          <div class="form-group">
            <label for="usuario">Telefono</label>
            <input class="form-control" type="number" id="user" placeholder="Numero" required>
          </div>

          <button type="submit" class="btn btn-success btn-block">Entrar</button>
          
        </form>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</body>
</html>


