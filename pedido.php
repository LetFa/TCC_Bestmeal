<?php

require __DIR__ . "/sistema/bloqueio.php";
require_once 'includes/funcoes.php';
require_once 'core/conexao_mysql.php';
require_once 'core/sql.php';
require_once 'core/mysql.php';

//session_start();
foreach ($_GET as $indice => $dado) {
    $$indice = limparDados($dado);
}

if (isset($acao) && $acao = 'delete') {
    unset($_SESSION['pedido'][$id]);
} else if (isset($id)) {
    $_SESSION['pedido'][$id] = $id;
}
$total  = 0;

?>

<!doctype html>
<html lang="pt-br">
<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>

    <div class="btn-car mt-3">
        <button class="btn btn-warning">
            <a href="produtos.php"><i class="fa-sharp fa-solid fa-cart-plus"></i></a>
        </button>
    </div>
    <div id="lanches">
        <h1 class="text-center mt-5"><i class="bi bi-caret-right-fill"></i> Finalização do pedido <i class="bi bi-caret-left-fill"></i></h1>
    </div>

    <div class="sub py-4 mt-5">
        <div class="container">
            <div class="row">


                <?php
                if (isset($_SESSION['pedido'])) {
     
                    foreach ($_SESSION['pedido'] as $pedido) {
                        $produtos = buscar(
                            'produtos',
                            ['*'],
                            [['id', '=', $pedido]]
                        );
         

                        $total += (float)$produtos[0]['preco'];
                        echo  "<br>";
                    }
            
                }
                ?>
                <?php

                if (isset($_SESSION['pedido']))

                    foreach ($_SESSION['pedido'] as $pedido) :
                        $produtos = buscar(
                            'produtos',
                            ['*'],
                            [['id', '=', $pedido]]
                        );

                ?>


                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $produtos[0]['nome'] ?>
                                </h4>
                                <p class="card-text p-y-1 mt-3">Descrição: <?php echo $produtos[0]['ingredientes']; ?></p>
                                <h6 class="card-subtitle text-success text-center mt-3">Valor R$<?php echo $produtos[0]['preco']; ?></h6>
                                <button class="btn btn-danger" type="submit"><a style="text-decoration: none;color:white;" href="pedido.php?acao=delete&id=<?php echo $produtos[0]['id'] ?>">Excluir</a></button>
                            </div>
                        </div>
                    </div>

                <?php
                    endforeach;
                ?>
            </div>
        </div>
        <div class="container mt-5">
            <div class="col-md-12">
                <h2 class="text-center">Valor total da compra</h2>
                <div class="text-center"> R$
                    <?php echo $total; ?>
                </div>
            </div>
            <form action="./core/pedido_repositorio.php">
                <input type="hidden" name="acao" value="insert">
                <div class="text-center mt-5">
                    <button class="btn btn-success">Finalizar pedido</button>
                </div>
            </form>

        </div>

    </div>

    <?php require __DIR__ . "/views/home/componentes/footer.php" ?>

</body>

</html>