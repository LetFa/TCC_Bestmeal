<?php require __DIR__ . "/vendor/autoload.php" ?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require __DIR__ . '/views/home/componentes/head.php' ?>

<body>
    <?php require __DIR__ . "/views/home/componentes/navbar.php" ?>

    <div class="area-cadastrar">
        <div class="container">
            <section class="text-center text-lg-start">
                <div class="card mb-3 formulario-cadastrar">
                    <img src="<?= asset('storage/banner/mini-login.png')?>" alt="logo">
                    <?php
                    require_once 'includes/funcoes.php';
                    require_once 'core/conexao_mysql.php';
                    require_once 'core/sql.php';
                    require_once 'core/mysql.php';

                    if (isset($_SESSION['login'])) {
                        $id = (int) $_SESSION['login']['usuario']['id'];

                        $criterio = [
                            ['id', '=', $id]
                        ];

                        $retorno = buscar(
                            'usuario',
                            ['id', 'nome', 'email'],
                            $criterio
                        );

                        $entidade = $retorno[0];
                    }

                    ?>
                            <form method="post" action="core/usuario_repositorio.php" style="width: 70%; margin: auto;margin-top:-50px;">
                                <input type="hidden" name="acao" value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                                <input type="hidden" name="id" value="<?php echo $entidade['id'] ?? '' ?>">
                                <div class="form-group">
                                    <input class="form-control" type="text" require="required" id="nome" name="nome" placeholder="Informe seu nome" value="<?php echo $entidade['nome'] ?? '' ?>">
                                </div>
                                <div class="form-group mt-3">
                                    <input class="form-control" type="email" require="required" id="email" name="email" placeholder="examples@gmail.com" value="<?php echo $entidade['email'] ?? '' ?>">
                                </div>
                                <?php if (!isset($_SESSION['login'])) : ?>
                                    <div class="form-group mt-3">
                                        <input class="form-control" type="password" require="required" id="senha" name="senha" placeholder="Senha">
                                    </div>
                                <?php endif; ?>
                                <div class="text-center">
                                    <button class="btn btn-warning  mt-5 w-100 mb-5" type="submit">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
</body>

</html>