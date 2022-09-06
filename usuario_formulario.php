<?php require __DIR__ . "/vendor/autoload.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
     
    <?php require __DIR__ . '/views/home/componentes/head.php' ?>

<body>
    <?php require __DIR__ . "/views/home/componentes/navbar.php" ?>

    <div class="container">
        <div class="row" style="min-height: 500px;">
           <div class="col-md-10 offset-1" style="padding-top: 50px;">
           <?php 
              require_once 'includes/funcoes.php';        
              require_once 'core/conexao_mysql.php';
              require_once 'core/sql.php';
              require_once 'core/mysql.php'; 
            
              if(isset($_SESSION['login'])){
                $id = (int) $_SESSION['login'] ['usuario'] ['id'];

                $criterio = [
                    ['id', '=', $id]
                ];

                $retorno = buscar(
                    'usuario',
                    ['id','nome','email'],
                    $criterio
                );

                $entidade = $retorno[0];
              }

           ?>
           <h2 class="text-center">Cadastre-se Conosco</h2>
           <form method="post" action="core/usuario_repositorio.php" style="width: 50%; margin: auto;">
               <input  type="hidden"  name="acao" value="<?php echo empty($id) ? 'insert' : 'update' ?>">
               <input type="hidden" name="id" value="<?php echo $entidade['id'] ?? '' ?>">
             <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" require="required" id="nome" name="nome" value="<?php echo $entidade['nome'] ?? ''?>">
             </div>
             <div class="form-group">
                <label for="email">E-mail</label>
                 <input class="form-control" type="email" require="required" id="email" name="email" value="<?php echo $entidade['email'] ?? ''?>">
             </div>
             <?php if(!isset($_SESSION['login'])) : ?>
             <div class="form-group">
                <label for="senha">Senha</label>
                <input class="form-control" type="password" require="required" id="senha" name="senha">
             </div>
             <?php endif; ?>
             <div class="text-center">
                <button class="btn btn-danger mt-5" type="submit">Salvar</button>
             </div>
           </form>
           </div>
        </div>
    </div>

</body>
</html>