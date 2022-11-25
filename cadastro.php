<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>
 
<?php require __DIR__ . "/views/home/componentes/navbar.php" ?>

<div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                </div>
            </div>
            <div class="row" style="min-height: 500px;">

                <div class="col-md-10" style="padding-top: 50px;">
                <?php
                    require_once 'includes/funcoes.php';
                    require_once 'core/conexao_mysql.php';
                    require_once 'core/sql.php';
                    require_once 'core/mysql.php';

                    foreach($_GET as $indice => $dado){
                        $$indice = limparDados($dado);
                    }
                    
                    if(!empty($id)){
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
                <h2>Cadastro lanches</h2>
                <form method="post" action="core/produtos_repositorio.php" enctype="multipart/form-data">
                    <input type="hidden" name="acao"
                            value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                    <input type="hidden" name="id"
                            value="<?php echo $entidade['cod_livro'] ?? '' ?>">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input class="form-control" type="text"
                            require="required" id="nome" name="nome"
                            value="<?php echo $entidade['nome'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço:</label>
                        <input class="form-control" type="text"
                            require="required" id="preco" name="preco"
                            value="<?php echo $entidade['preco'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="ingredientes">Ingredientes:</label>
                        <input class="form-control" type="text"
                            require="required" id="ingredientes" name="ingredientes"
                            value="<?php echo $entidade['ingredientes'] ?? '' ?>">
                        </div>

                    </div>
                    <div class="form-group">   
                        <label for="conteudo">Enviar foto do lanche:</label>
                        <input type="file" name="foto" accept="image/*">    
                    </div>   
                    <div class="text-right">
                        <button class="btn btn-success"
                                 type="submit">Próximo</button>
                    </div>
                </form>
            </div>
        </div>
    
        <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

</body>
</html>