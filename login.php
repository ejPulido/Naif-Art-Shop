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
<section class="container-fluid row">
  <div class="login-container container col-6 col-sm-6 col-md-6 col-lg-6 ">
    <h3>Login</h3>
    <form class="login" method="post">
      <div class="campos-container">
        <label>Email
          <br>
          <input type="text" name="email" value="" class="campo">
        </label>
        <label>Contraseña
          <input type="password" name="password" value="" class="campo">
        </label>
      </div>
      <?php include("loginback.php");?>
      <div class="btn-container">
        <input type="submit" name="loginbtn" value="Ingresar" class="login__btn">
      </div>
    </form>
    <div class="">
      <span>¿Aun no tienes Cuenta? <a href="register.php">Crea una cuenta aquí</a>  </span>
    </div>
  </div>
</section>


<!--importaion de scripts necesarios-->\
<!--JS DE bootstrap-->

<script type="text/javascript" src="js/bootstrap.bundle.js">
</script>
<!--jquery-->
<script type="text/javascript" src="js/jquery-3.6.0.min.js">
</script>
<!--js propio-->
<script type="text/javascript" src="js/script.js">
</script>
<!--/importaion de scripts necesarios-->
  </body>
</html>
