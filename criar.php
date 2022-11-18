<?php

require __DIR__ . "/sistema/bloqueio.php";
require __DIR__ ."/core/Connection.php";

$items = new Connection();
$produtos = $items->pesquisa('produtos');
?>

<!doctype html>
<html lang="pt-br">
<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>


     <div class="container" id="lanches">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5"><i class="bi bi-caret-right-fill"></i> Faça seu pedido <i class="bi bi-caret-left-fill"></i></h1>
            </div>

            <!-- Cria um loop de dados -->
            <?php foreach($produtos as $produto) {?>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">

                  <img class="card-img-top" src="views/_resources/storage/lanches/<?= $produto['imagem'] ?>.jpg" alt="Card image cap">

                  <div class="card-body">
                  <h5 class="text-center"><?= $produto['nome']?></h5>
                  <div class="lista-cardapio text-center">
                    <p><?=$produto['ingredientes']?></p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden" value="<?=$produto['id']?>">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$<?= $produto['preco']?></p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>



        </div>
     </div>



    <?php require __DIR__ . "/views/home/componentes/footer.php" ?>
</body>

</html>