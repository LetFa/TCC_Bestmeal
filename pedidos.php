<?php
session_start();

include 'sistema/valida_login.php'

?>

<!DOCTYPE html>
<html>

<head>
    <?php require __DIR__ . '/views/home/componentes/head.php' ?>
</head>

<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php'  ?>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mt-5">Listagem de usuário</h2>


                <?php
                require_once 'includes/funcoes.php';
                require_once 'core/conexao_mysql.php';
                require_once 'core/sql.php';
                require_once 'core/mysql.php';

                foreach ($_GET as $indice => $dado) {
                    $$indice = limparDados($dado);
                }

                $data_atual = date('Y-m-d H:i:s');

                $criterio = [];

                if (!empty($busca)) {
                    $criterio[] = ['nome', 'like', "%{$busca}%"];
                }

                $result = buscar(
                    'pedido',
                    [
                        'cod',
                        'cod_usuario',
                        '(select nome from usuarios where usuarios.id = cod_usuario) as nome',
                        'data_hora',
                        '(select sum(preco) from pedido_item inner join produtos on produtos.id = pedido_item.cod_produto where pedido_item.cod_pedido = cod) as total'
                    ],
                    $criterio
                );
                ?>
                <table class="table table-bordered table-hover table stripped
                                table-responsive{-sm|-md|-lg|-xl} mt-3">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Nome</td>
                            <td>Data</td>
                            <td>Total</td>
                            <td>Produtos</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $entidade) :
                            $data = date_create($entidade['data_hora']);
                            $data = date_format($data, 'd/m/Y H:i:s');
                        ?>
                            <tr>
                                <td><?php echo $entidade['cod'] ?></td>
                                <td><?php echo $entidade['nome'] ?></td>
                                <td><?php echo $data ?></td>
                                <td><?php echo $entidade['total'] ?></td>
                                <td>
                                    <button class="btn btn-warning">
                                        <a style="text-decoration: none;color:white;" href='pedido_produtos.php?cod_pedido=<?php echo $entidade['cod'] ?>'>Produtos</a>
                                </td>
                                </button>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <footer>
            <?php require __DIR__ . "/views/home/componentes/footer.php" ?>
        </footer>
    </div>
    
    <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</body>

</html>