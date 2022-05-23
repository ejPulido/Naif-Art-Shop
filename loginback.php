<?php
session_start();
include("database.php");
if(isset($_POST['loginbtn'])){
if(strlen($_POST['email'])>0 && strlen($_POST['password'])>0){

  $mail = $_POST['email'];
  $passForm = $_POST['password'];
  $querypass = "SELECT `password` FROM `Users` WHERE mail = '$mail'";
  $queryId = "SELECT `id` FROM `Users` WHERE mail = '$mail'";

  $dbUserPassword = mysqli_query($conex,$querypass);
  $dbuserId = mysqli_query($conex,$queryId);

  $passdb = mysqli_fetch_array($dbUserPassword);
  $iduser = mysqli_fetch_array($dbuserId);

  if(password_verify($passForm,$passdb[0])){
    $_SESSION['user_id'] = $iduser;
    header('location: /naifShop');

  }
  else {
    ?>
    <div class="failed-Login">
      <p>Error! usuario o Contraseña invalido</p>
    </div>
    <?php

  }

}
}
 ?>
