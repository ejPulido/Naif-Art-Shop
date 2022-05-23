<?php
 include("userLoginComprobation.php");
 ?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Naif Art Shop</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!--Estilos propios-->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body id="body">

<!--Modal-->
<?php
  require 'partials/modal.php';
 ?>
<!--Modal-->
<!--nav-->
<?php
  require 'partials/header.php';
 ?>
<!--/nav-->

<div class="hero-container">
  <div class="hero__title-container container">
    <h1 class="display-1">Naif-Art-Shop</h1>
    <h2 class="display-5">Tienda Online de Arte Naif</h2>
    <?php if (empty($usuario)): ?>
    <div class="hero__botons">
      <a href="login.php" class="hero__botons-btn">Iniciar Sesión</a>
      <a href="register.php" class="hero__botons-btn">Registrarse</a>
    </div>
  <?php endif; ?>
  </div>

  <div class="hero__img">
  </div>
</div>

<!--elements-->
<div class="container-fluid article">
  <!--artice-->
  <div class="container article__container row  p-5">
    <div class="article__element col-6 col-sm-6 col-md-6 col-lg-6 p">
      <div class="article__img ">
        <img src="assets/src/img/1.png" class="img-fluid" alt="talla">
      </div>
    </div>
    <div class="article__description col-5 col-sm-5 col-md-5 col-lg-5">
      <h4>Descripción</h4>
      <p class="article__description-text">
        Pesebre tallado en madera.
        <br>
        Policromado con pintura al frio.
        <b>Tamaño:</b> 20cm de largo.
      </p>
      <div class="buy-boton-container">
        <a href="#" class="article__link buy-boton">Realizar Compra</a>
      </div>
    </div>
  </div>
  <!--/artice-->
</div>
<!--importaion de scripts necesarios-->
<?php require 'partials/importScript.php'; ?>
<!--/importaion de scripts necesarios-->
  </body>
</html>
