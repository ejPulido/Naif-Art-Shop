<!--nav-->

<nav class="nav">
  <div class="nav-container">
    <div class="nav__title">
      <a href="index.php" class="title-link">
        <h2 class="nav__title-text">Naif-Art-Shop</h2>
      </a>
    </div>
    <div class="nav__items">
      <ul class="nav__items-links">
        <li class="nav__items-links-link"><a href="index.php" class="nav__items-links-link-href">Home</a></li>
        <?php if (!empty($usuario)): ?>
          <li class="nav__items-links-link"><a href="#" class="nav__items-links-link-href"><?= $usuario['nombre'] ?></a></li>
          <li class="nav__items-links-link"><a href="logout.php" class="nav__items-links-link-href">Cerrar Sesion</a></li>
        <?php else: ?>
          <li class="nav__items-links-link"><a href="login.php" class="nav__items-links-link-href">Iniciar Sesión</a></li>
          <li class="nav__items-links-link"><a href="register.php" class="nav__items-links-link-href">Registro</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<!--/nav-->
