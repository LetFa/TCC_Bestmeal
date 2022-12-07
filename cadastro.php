<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>

    <?php require __DIR__ . "/views/home/componentes/navbar.php" ?>

    <div class="banner-cadastro">

        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="form-cadastro">


                        <div id="lanches">
                            <h1 class="text-center mt-5 text-light"><i class="bi bi-caret-right-fill"></i> Cadastro dos lanches <i class="bi bi-caret-left-fill"></i></h1>
                        </div>

                        <?php
                        require_once 'includes/funcoes.php';
                        require_once 'core/conexao_mysql.php';
                        require_once 'core/sql.php';
                        require_once 'core/mysql.php';

                        foreach ($_GET as $indice => $dado) {
                            $$indice = limparDados($dado);
                        }

                        if (!empty($id)) {
                            $id = (int)$id;

                            $criterio = [
                                ['id', '=', $id]
                            ];

                            $retorno = buscar(
                                'produtos',
                                ['*'],
                                $criterio
                            );

                            $entidade = $retorno[0];
                        }
                        ?>



                        <form method="post" action="core/produtos_repositorio.php" enctype="multipart/form-data">
                            <input type="hidden" name="acao" value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                            <input type="hidden" name="id" value="<?php echo $entidade['cod'] ?? '' ?>">
                            <div class="form-group">
                                <input class="form-control" type="text" require="required" id="nome" name="nome" placeholder="Informe o nome do seu lanche" value="<?php echo $entidade['nome'] ?? '' ?>">
                            </div>
                            <div class="form-group  mt-3">
                                <input class="form-control" type="text" require="required" id="preco" name="preco" placeholder="Preço" value="<?php echo $entidade['preco'] ?? '' ?>">
                            </div>
                            <div class="form-group  mt-3">
                                <input class="form-control" type="text" require="required" id="ingredientes" name="ingredientes" placeholder="Ingredientes" value="<?php echo $entidade['ingredientes'] ?? '' ?>">
                            </div>


                            <div class="form-group">
                                <input type="file" name="foto" accept="image/*">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Próximo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

</body>

</html>