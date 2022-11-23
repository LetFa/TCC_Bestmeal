<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                include 'includes/topo.php';
                include 'sistema/valida_login.php';
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php include 'includes/menu.php'; ?>
            </div>
            <div class="col-md-10">
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
                <h1 class="mt-5">Cadastro</h1>
                <form method="post" action="core/produtos_repositorio.php">
                    <input type="hidden" name="acao"
                            value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                    <input type="hidden" name="id"
                            value="<?php echo $entidade['id'] ?? '' ?>">
                    
                </form>
                <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" require="required" class="form-control" value="<?php echo $entidade['nome'] ?? ''?>">
                </div>
                
                <div class="form-group">
                        <label for="preco">Preço:</label>
                        <input type="text" name="preco" id="preco" require="required" class="form-control" value="<?php echo $entidade['preco'] ?? ''?>">
                </div>

                <div class="form-group">
                        <label for="Ingred">Ingredientes:</label>
                        <input type="text" name="Ingred" id="Ingred" require="required" class="form-control" value="<?php echo $entidade['Ingred'] ?? ''?>">
                </div>
                
                <div class="form-group">
                        <label for="img">Imagem:</label>
                        <input type="text" name="img" id="img" require="required" class="form-control" value="<?php echo $entidade['img'] ?? ''?>">
                </div>

                


</body>

</html>