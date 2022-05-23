<?php
session_start();
include("database.php");

if (isset($_SESSION['user_id'])){
  $id = $_SESSION['user_id'][0];
  $query = "SELECT `id`, `nombre`, `apellido`, `mail`, `password` FROM `Users` WHERE id = $id";
  $dbconsulta = mysqli_query($conex,$query);
  $datosUsuarios = mysqli_fetch_array($dbconsulta);
  print_r($datosUsuarios['']);
  $usuario = null;
  if (count($datosUsuarios)>0){
    $usuario = $datosUsuarios;
  }

}


 ?>
