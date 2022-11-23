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
                   <?php
                       
                        include 'sistema/valida_login.php';
                    ?>
                <h1 class="text-center mt-5"><i class="bi bi-caret-right-fill"></i> Faça seu pedido <i class="bi bi-caret-left-fill"></i></h1>
            </div>

            <div class="col-md-12">
                    <?php include 'includes/menu.php'; ?>
            </div>
            
         
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio1.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">X-DELICIA</h5>
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, queijo, tomate, alface e pliques</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
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
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, cheddar, tomate, alface e pimenta</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
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
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, cheddar, queijo, ketchup e catupiry</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
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
                  <h5 class="text-center">X-TORRE</h5>
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, cheddar, queijo, ketchup e catupiry</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 18,99</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio5.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">MISTO QUENTE</h5>
                  <div class="lista-cardapio text-center">
                    <p>Pão de forma, presunto, queijo e feito na chapa</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 11,99</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio6.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">X-PRESUNTO</h5>
                  <div class="lista-cardapio text-center">
                    <p>Pão cebola, presunto, tomate e pepino</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 20,00</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio7.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">X-OUVINHO</h5>
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, ovo, tomate, alface e maionese</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 23,00</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            

            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio8.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">STRANGER THINGS</h5>
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, bacon, molho de alho e queijo cheddar</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 30,00</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio9.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">X-PINK</h5>
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, cheddar, tomate, alface e batata frita
                    </p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 21,99</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio10.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">MONTANHA</h5>
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, molho vermelho, cheddar, cebola roxa e pliques
                    </p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 30,00</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio11.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">X-ONION</h5>
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, onion, bacon, carne e molho cheddar
                    </p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 30,00</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="views/_resources/storage/lanches/cardapio12.jpg" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="text-center">CHEDDAR</h5>
                  <div class="lista-cardapio text-center">
                    <p>Hambúrguer, molho cheddar, ketchup e bacon
                    </p>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <form action="pedido.php" method="GET">
                        <input name="produtoId" type="hidden">
                        <button type="submit" class="btn btn-sm btn-warning">Comprar</button>
                     </form>
                      <p class="card-text text-success" style="margin-left:1rem;">R$ 30,00</p>
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