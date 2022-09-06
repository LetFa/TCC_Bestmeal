<?php
 //if se nao existir a session nome
  if(!isset($_SESSION['nome'])){
    header("location:".SITE."/login_formulario.php"); //redireciona para url login_formulario
  }
?>