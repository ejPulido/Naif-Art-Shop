<?php
#proximo avance encriptar los password

  include("database.php");

  if(isset($_POST['register'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pass = $_POST['password'];

    $buscarCorreo = "SELECT `id`, `nombre`, `apellido`, `mail`, `password` FROM `Users` WHERE mail = '$correo'";
    $busqueda = mysqli_query($conex,$buscarCorreo);
    $verificaciónCorreo = mysqli_fetch_array($busqueda);

    if(empty($verificaciónCorreo)){

      if(strlen($nombre)>=2 && strlen($nombre)>=2){
        if(strlen($correo)>=2 && stripos($correo, "@")&& stripos($correo, ".")){
          if (strlen($pass)>=8){
            if($pass == $_POST['confirm_password']){
              $passwordEncripted = password_hash($pass,PASSWORD_BCRYPT);
              $query= "INSERT INTO `Users`(`nombre`, `apellido`, `mail`, `password`) VALUES ('$nombre','$apellido','$correo','$passwordEncripted')";
              $resultado = mysqli_query($conex,$query);

              if($resultado){

                ?>
                <div class="succes-register">
                  <p>Usuario Registrado Exitosamente</p>
                </div>
                <?php

              }


            }
            else {

              ?>
              <div class="failed-Login">
                <p>error en la verificación de contraseña</p>
              </div>
              <?php
              }

          }
          else{

            ?>
            <div class="failed-Login">
              <p>contraseña demasiado corta debe contener más de 8 caracteres</p>
            </div>
            <?php

          }
        }else {
          ?>
          <div class="failed-Login">
            <p>email invalido debe contener el formato @example.algo</p>
          </div>
          <?php

        }
      }
      else{
        ?>
        <div class="failed-Login">
          <p>Por favor, el nombre o apellido debe contener mas de 2 caracteres</p>
        </div>
        <?php
      }

    }else {
      ?>
      <div class="failed-Login">
        <p>El Correo Ingresado ya se encuentra Registrado</p>
      </div>
      <?php
    }


  }
 ?>
