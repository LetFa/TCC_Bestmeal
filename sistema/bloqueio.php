<?php

  require __DIR__ ."/Config.php";
  if(!isset($_SESSION['login'])){
    header("location:".SITE."/login_formulario.php");
  }
?>