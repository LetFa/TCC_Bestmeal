<?php
require __DIR__ . "/sistema/bloqueio.php";
?>

<!doctype html>
<html lang="pt-br">
<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>

  <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>





  <div class="container mt-5" id="lanches">
    <h1 class="text-center"><i class="bi bi-caret-right-fill"></i> Faça seu pedido <i class="bi bi-caret-left-fill"></i></h1>
    <div class="row mt-5">

      <?php
      require_once 'includes/funcoes.php';
      require_once 'core/conexao_mysql.php';
      require_once 'core/sql.php';
      require_once 'core/mysql.php';

      foreach ($_GET as $indice => $dado) {
        $$indice = limparDados($dado);
      }

      $produtos = buscar(
        'produtos',
        ['*'],
        []
      );
      ?>

      <?php
      foreach ($produtos as $produtos) :
      ?>



        <div class="col-md-3">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src=<?php echo "imagens/" . $produtos['foto'] ?> alt="Card image cap">

            <div class="card-body">
              <h5 class="text-center"><?php echo $produtos['nome'] ?></h5>
              <div class="lista-cardapio text-center">
                <p><?php echo $produtos['ingredientes'] ?></p>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <form action="pedido.php" method="GET">
                    <input name="produtoId" type="hidden">
                    <button type="submit" class="btn btn-sm btn-warning text-decoration"><a href="<?php echo 'teste.php?id=' . $produtos['produtoId'] ?>" style="text-decoration:none;color:black;">Comprar</a></button>
                  </form>
                  <p class="card-text text-success" style="margin-left: 1rem;font-size:15pt;"><?php echo $produtos['preco'] ?></p>
                </div>
                <small class="text-muted">Bestmeal</small>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>


  <?php require __DIR__ . "/views/home/componentes/footer.php" ?>
</body>

</html>