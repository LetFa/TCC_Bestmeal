<?php 
    require __DIR__ ."/sistema/bloqueio.php";
?>

<!doctype html>
<html lang="pt-br">
    <?php require __DIR__ ."/views/home/componentes/head.php" ?>
<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>
   
    <h1 class="text-center mt-5">Produtos cadastrados</h1>

       
   <div class="container">
    <div class="row">
      
    <?php
          require_once 'includes/funcoes.php';
          require_once 'core/conexao_mysql.php';
          require_once 'core/sql.php';
          require_once 'core/mysql.php';

          foreach($_GET as $indice => $dado){
              $$indice = limparDados($dado);
          }
          
          $produtos = buscar(
                      'produtos',
                      ['*'],
                      []);
    ?>

    <?php
        foreach($produtos as $produtos):
    ?>  



<div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src=<?php echo "imagens/".$produtos['foto']?> alt="Card image cap">

          <div class="card-body">
              <h5 class="text-center"><?php echo $produtos['nome']?></h5>
            <div class="lista-cardapio text-center">
                <p><?php echo $produtos['ingredientes']?></p>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning"><a href="<?php echo 'teste.php?id='. $produtos['produtoId']?>">Comprar</a></button>
                     </form>
                      <p class="card-text text-success"><?php echo $produtos['preco']?></p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
      <?php endforeach; ?>
    </div>
   </div>











  
            

  

    <?php require __DIR__ ."/views/home/componentes/footer.php" ?>
</body>

</html>