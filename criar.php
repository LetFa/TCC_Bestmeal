<?php 
    require __DIR__ ."/vendor/autoload.php";
    require __DIR__ ."/sistema/bloqueio.php";
?>

<!doctype html>
<html lang="pt-br">
    <?php require __DIR__ ."/views/home/componentes/head.php" ?>
<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>
  

    <div class="container">
        <h1 class="text-center mt-5">Cria seu pedido</h1>
    </div>
    <form action="">
        
        <div class="form-group container">
            <label for="name">Informe o nome da sua criação:</label>
            <input type="text" class="form-control" id="name">
            <small id="text" class="form-text text-muted">Seja Criativo(a).</small>
        </div>
    
    </form>

    <?php require __DIR__ ."/views/home/componentes/footer.php" ?>
</body>

</html>