<?php require __DIR__ . "/vendor/autoload.php" ?>
<!DOCTYPE html>
<html lang="pt-br">

<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>
    <?php require __DIR__ . "/views/home/componentes/navbar.php" ?>

    <div class="area-login">
      <div class="container">
           <div class="col-md-6 offset-md-3" style="padding-top: 50px;">
             <h1 class="text-center">Login</h1>
             <div class="card-body">
                <form method="post" action="core/usuario_repositorio.php">
                    <input type="hidden" name="acao" value="login">
                    <div class="form-group mt-3">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" require="required" id="email" name="email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="senha">Senha</label>
                        <input class="form-control" type="password" require="required" id="senha" name="senha">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-dark mt-5" type="submit">Acessar</button>
                    </div>
                </form>
             </div>
           </div>
        </div>
      </div> 
      </div>

</body>
</html>