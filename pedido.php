<?php 
    require __DIR__ ."/sistema/bloqueio.php";
?>

<!doctype html>
<html lang="pt-br">
    <?php require __DIR__ ."/views/home/componentes/head.php" ?>
<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>
   
    <h1 class="text-center mt-5">Pedido finalizado</h1>

        <?php

        echo "ID PRODUTO: ";
        print_r($_GET['produtoId']);
        echo "<br>";

        echo "ID Usuario: ";
        print_r($_SESSION['login']['usuarios']['id']);

        ?>

    <?php require __DIR__ ."/views/home/componentes/footer.php" ?>
</body>

</html>