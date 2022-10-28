<?php

  require __DIR__ ."/Config.php";
  if(!isset($_SESSION['nome'])){
    header("location:".SITE."/login_formulario.php");
  }
?>