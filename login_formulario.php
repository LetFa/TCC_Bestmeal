<?php require __DIR__ . "/vendor/autoload.php" ?>
<!DOCTYPE html>
<html lang="pt-br">

<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>
    <?php require __DIR__ . "/views/home/componentes/navbar.php" ?>
      <div class="container">
           <div class="col-md-10" style="padding-top: 50px;">
             <div class="card-header">Login</div>
             <div class="card-body">
                <form method="post" action="core/usuario_repositorio.php">
                    <input type="hidden" name="acao" value="login">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" require="required" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input class="form-control" type="password" require="required" id="senha" name="senha">
                    </div>
                    <div class="text-right">
                        <button class="btn btn-dark" type="submit">Acessar</button>
                    </div>
                </form>
             </div>
           </div>
        </div>
      </div> 
      <?php  require __DIR__ . "/views/home/componentes/footer.php" ?>
</body>
</html>