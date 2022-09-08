<?php
  if(!isset($_SESSION['nome'])){
    header("location:".SITE."/login_formulario.php");
  }
?>