
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Naif Art Shop</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!--Estilos propios-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
  </head>
  <body>
<!--nav-->
<?php require 'partials/header.php'; ?>
<!--/nav-->

<section class="container-fluid row mb-5">
  <div class="register-container container col-8 col-sm-8 col-md-8 col-lg-8 ">
    <h3 class="title">Registro de Usuario</h3>
    <?php include("registro.php");?>
    <form class="login" method="post">
      <div class="campos-container">
        <label>Nombre:
          <input type="text" name="nombre" value="" class="campo" placeholder="Escriba su nombre">
        </label>
        <label>Apellido:
          <input type="text" name="apellido" value="" class="campo" placeholder="Escriba su apellido">
        </label>
        <label>Correo:
          <input type="text" name="correo" value="" class="campo" placeholder="alguien@mail.com">
        </label>
        <label>Contraseña:
          <input type="password" name="password" value="" class="campo" placeholder="SBQRw9jKhMWSf2U">
        </label>
        <label>Repita la Contraseña:
          <input type="password" name="confirm_password" value="" class="campo" placeholder="SBQRw9jKhMWSf2U">
        </label>
      </div>
      <div class="btn-container">
        <input type="submit" name="register" value="registrar" class="register__btn">
      </div>
    </form>
    <div class="">
      <span>¿Ya tienes una Cuenta? <a href="login.php">Inicia Sesión aquí</a>  </span>
    </div>
  </div>
</section>
<!--importaion de scripts necesarios-->
<?php require 'partials/importScript.php'; ?>
<!--/importaion de scripts necesarios-->
<?php require 'database.php' ?>

  </body>
</html>
