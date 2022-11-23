<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>
    
<?php require __DIR__ . '/views/home/componentes/navbar.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            include 'includes/topo.php';
            include 'includes/valida_login.php';
            ?>
        </div>
   
            <div class="row" style="min-height: 500px;">
                <div class="col-md-12">
                    <?php include 'includes/menu.php'; ?>
                </div>
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
                            'post',
                            ['*'],
                            $criterio
                        );

                        $entidade = $retorno[0];
                    }
                ?>
                <h2 class="text-center mt-3">Cadastrar Produtos</h2>
                <form method="post" action="core/produtos_repositorio.php">


                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="views/_resources/storage/lanches/cardapio1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="text-center" >X-DELICIA</h5>
                                <div class="lista-cardapio text-center">
                                    <p>Hambúrguer, queijo, tomate, alface e pliques</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <form action="pedido.php" method="GET">
                                        <input name="produtoId" type="hidden" name="produtoId"  id="produtoId" require="required" value="<?php echo $entidade['produtoId'] ?? '' ?>">
                                        <button type="submit" class="btn btn-sm btn-warning"  >Comprar</button>
                                        
                                    </form>
                                        <p class="card-text text-success" style="margin-left:1rem;">R$ 17,99</p>
                                    </div>
                                    <small class="text-muted">Bestmeal</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
    </div>
            <div class="container-fluid">
                <?php
                        require __DIR__ . "/views/home/componentes/footer.php"
                ?>
            </div>  
                </form>

            


  <!--
                    <input type="hidden" name="acao"
                            value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                    <input type="hidden" name="id"
                            value="<?php echo $entidade['id'] ?? '' ?>">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input class="form-control" type="text"
                            require="required" id="titulo" name="titulo"
                            value="<?php echo $entidade['titulo'] ?? '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="texto">Texto</label>
                        <textarea class="form-control" type="text"
                            require="required" id="texto" name="texto" rows="5">
                            <?php echo $entidade['texto'] ?? '' ?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="texto">Postar em</label>
                        <?php
                            $data = (!empty($entidade['data_postagem']))?
                                explode('', $entidade['data_postagem'])[0] : '';
                            $hora = (!empty($entidade['data_postagem']))?
                                explode('', $entidade['data_postagem'])[1] : '';
                        ?>
                        <div class="row">
                            <div class="col-md-3">
                                <input class="form-control" type="date"
                                    require="required"
                                    id="data_postagem"
                                    name="data_postagem"
                                    value="<?php echo $data ?>">
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="time"
                                    require="required"
                                    id="hora_postagem"
                                    name="hora_postagem"
                                    value="<?php echo $hora ?>">
                            </div> 
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-danger"
                                 type="submit">Salvar</button>
                    </div>
                </form>
            </div>
        </div>

                -->
   
          
</body>
</html>