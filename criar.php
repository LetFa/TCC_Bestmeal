<?php
require __DIR__ . "/sistema/bloqueio.php";
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

            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="views/_resources/storage/lanches/cardapio1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="text-center">X-DELÍCIA</h5>
                  <div class="lista-cardapio">
                    <ul>
                        <li><i class="bi bi-caret-right-fill"></i>1 Hambúrguer</li>
                        <li><i class="bi bi-caret-right-fill"></i>Queijo</li>
                        <li><i class="bi bi-caret-right-fill"></i>Tomate</li>
                        <li><i class="bi bi-caret-right-fill"></i>Alface</li>
                        <li><i class="bi bi-caret-right-fill"></i>Pliques</li>
                    </ul>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-warning">Comprar</button>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 17,99</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="views/_resources/storage/lanches/cardapio2.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="text-center">X-PIMENTA</h5>
                <div class="lista-cardapio">
                    <ul>
                        <li><i class="bi bi-caret-right-fill"></i>2 Hambúrguer</li>
                        <li><i class="bi bi-caret-right-fill"></i>Chaddar</li>
                        <li><i class="bi bi-caret-right-fill"></i>Tomate</li>
                        <li><i class="bi bi-caret-right-fill"></i>Alface</li>
                        <li><i class="bi bi-caret-right-fill"></i>Pimenta</li>
                    </ul>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-warning">Comprar</button>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 22,99</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="views/_resources/storage/lanches/cardapio3.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="text-center">X-GORDINHO</h5>
                <div class="lista-cardapio">
                    <ul>
                        <li><i class="bi bi-caret-right-fill"></i>1 Hambúrguer</li>
                        <li><i class="bi bi-caret-right-fill"></i>Chaddar</li>
                        <li><i class="bi bi-caret-right-fill"></i>Queijo</li>
                        <li><i class="bi bi-caret-right-fill"></i>Ketchup</li>
                        <li><i class="bi bi-caret-right-fill"></i>Catupiry</li>
                    </ul>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-warning">Comprar</button>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 25,00</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="views/_resources/storage/lanches/cardapio4.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="text-center">X-GORDINHO</h5>
                <div class="lista-cardapio">
                    <ul>
                        <li><i class="bi bi-caret-right-fill"></i>1 Hambúrguer</li>
                        <li><i class="bi bi-caret-right-fill"></i>Chaddar</li>
                        <li><i class="bi bi-caret-right-fill"></i>Queijo</li>
                        <li><i class="bi bi-caret-right-fill"></i>Ketchup</li>
                        <li><i class="bi bi-caret-right-fill"></i>Catupiry</li>
                    </ul>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-warning">Comprar</button>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 25,00</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>




        </div>
     </div>



    <?php require __DIR__ . "/views/home/componentes/footer.php" ?>
</body>

</html>