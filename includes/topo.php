<?php
session_start();
?>

<div class="card bg-light">
    <?php if (isset($_SESSION["login"])) : ?>
        <div class="card-body text-right text-dark">
            Olá <?php echo $_SESSION['login']['usuarios']['nome'] ?>!
            <a href="core/usuario_repositorio.php?acao=logout" class="btn btn-dark" role="button">Sair</a>
        </div>
    <?php endif ?>
</div>