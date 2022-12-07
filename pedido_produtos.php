<?php

require __DIR__ . "/sistema/bloqueio.php";
require_once 'includes/funcoes.php';
require_once 'core/conexao_mysql.php';
require_once 'core/sql.php';
require_once 'core/mysql.php';

foreach ($_GET as $indice => $dado) {
    $$indice = limparDados($dado);
}

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
                $total  = 0;
                $produtos = buscar(
                    'pedido_item',
                    [
                        'cod_pedido',
                        'cod_produto',
                        '(select nome from produtos where produtos.id = cod_produto) as nome_produto',
                        '(select foto from produtos where produtos.id = cod_produto) as foto',
                        '(select preco from produtos where produtos.id = cod_produto) as preco'

                    ],
                    [['cod_pedido', '=', $cod_pedido]]
                );
                ?>
                <?php
                foreach ($produtos as $produto) :                    
                    $total += (float)str_replace(',','.',$produto['preco']);
                ?>


                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $produto['nome_produto'] ?>
                                </h4>
                                <h6 class="card-subtitle text-success text-center mt-3">Valor R$<?php echo $produto['preco']; ?></h6>

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