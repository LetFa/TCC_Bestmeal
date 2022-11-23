<!DOCTYPE html>

<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<html>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        include 'includes/topo.php';
                        include 'includes/valida_login.php';
                        if($_SESSION['login']['usuarios']['adm'] !==1){
                            header('Location: login_formulario.php');
                        }
                    ?>
                </div>
            </div>
            <div class="row" style="min-height: 500px;">
                <div class="col-md-12">
                    <?php include 'includes/menu.php'; ?>
                </div>
                <div class="col-md-10" style="padding-top: 50px;">
                <h2>Usuário</h2>
                <?php include 'includes/busca.php'; ?>
                <?php
                    require_once 'includes/funcoes.php';
                    require_once 'core/conexao_mysql.php';
                    require_once 'core/sql.php';
                    require_once 'core/mysql.php';

                    foreach($_GET as $indice => $dado){
                        $$indice = limparDados($dado);
                    }

                    $data_atual = date('Y-m-d H:i:s');

                    $criterio = [];

                    if(!empty($busca)){
                        $criterio[] = ['nome', 'like', "%{$busca}%"];
                    }

                    $result = buscar(
                        'usuarios',
                        [
                            'id',
                            'nome',
                            'email',
                            'ativo',
                            'adm'
                        ],
                        $criterio,
                        'data_criacao DESC, nome ASC'
                    );

                ?>
                <table class="table table-bordered table-hover table stripped
                                table-responsive{-sm|-md|-lg|-xl}">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>E-mail</td>
                            <td>Ativo</td>
                            <td>Administrador</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($result as $entidade):
                                $data = date_create($entidade['data_criacao']);
                                $data = date_format($data, 'd/m/Y H:i:s');
                        ?>
                        <tr>
                            <td><?php echo $entidade['nome'] ?></td>
                            <td><?php echo $entidade['email'] ?></td>
                            <td><?php echo $data?></td>
                            <td><a href='core/usuario_repositorio.php?acao=status&id=<?php echo $entidade['id']?>
                            &valor=<?php echo !$entidade['ativo']?>'><?php echo ($entidade['ativo']==1) ?
                            'Desativar' : 'Ativar'; ?></a></td>
                            <td><a href='core/usuario_repositorio.php?acao=adm&id=<?php echo $entidade['id']?>
                            &valor=<?php echo !$entidade['adm']?>'><?php echo ($entidade['adm']==1) ?
                            'Promover' : 'Rebaixar'; ?></a></td>


                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                     require __DIR__ . "/views/home/componentes/footer.php" 
                ?>
            </div>
        </div>
        </div>
        <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>