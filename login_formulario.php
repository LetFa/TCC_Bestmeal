<!DOCTYPE html>
<html lang="pt-br">

<?php require __DIR__ . "./views/home/componentes/head.php" ?>

<body>
    <?php require __DIR__ . "./views/home/componentes/navbar.php" ?>

    <div class="area-login">
         <div class="container text-center formulario-login">
                   <div class="img-bestmeal">
                    <img src="./views/_resources/storage/logo/bestmeal-logo.png" alt="">
                   </div>
                    <form method="post" action="./core/usuario_repositorio.php" class="mt-3">
                        <div class="form-group">
                            <input type="hidden" name="acao" value="login">
                            <input type="email" id="email" name="email"  class="form-control" placeholder="examples@gmail.com" require="required">
                        </div>
                         
                        <div class="form-group mt-3">
                            <input type="password" id="senha" name="senha" class="form-control" placeholder="senha" require="required">
                        </div>

                
                        <div class="form-group mostrar-senha mt-3">
                            <input class="input-mostrar-senha" type="checkbox"  id="mostrar-senha-login" require="required">
                            <label class="label-mostrar-senha" for="mostrar-senha-login">Mostrar Senha</label>
                        </div>

                        <button type="submit" class="btn btn-warning mt-3 w-50">Acessar</button>

                    </form>
                </div>
            </div>
         </div>
    </div>


        <script>
          
          let mostrarSenha = document.getElementById("mostrar-senha-login");
          mostrarSenha.addEventListener('click', function(){
           
            let senha = document.getElementById("senha");

            if(senha.type == 'password'){
               senha.type = 'text'
            }else{
                senha.type = 'password'
            }
          });


        </script>
</body>
</html>