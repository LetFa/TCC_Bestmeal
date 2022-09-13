<?php require __DIR__ . "/vendor/autoload.php" ?>
<!DOCTYPE html>
<html lang="pt-br">

<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>
    <?php require __DIR__ . "/views/home/componentes/navbar.php" ?>

    <div class="area-login">
        <section class="text-center text-lg-start">
            <div class="card mb-3 formulario-login">
                <div class="row g-0 d-flex align-items-center">
                    <div class="col-lg-4 d-none d-lg-flex">
                        <img src="<?= asset('storage/banner/mini-login.png') ?>" alt="Trendy Pants and Shoes" class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5">
                    </div>

                    <div class="col-lg-8">
                        <div class=" py-3 px-md-5">
                            <div class="form-area">
                                <form method="post" action="core/usuario_repositorio.php">
                                    <input type="hidden" name="acao" value="login">
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email"  class="form-control" placeholder="examples@gmail.com" require="required">
                                    </div>


                                    <div class="form-outline mb-4">
                                        <input type="password" id="senha" name="senha" class="form-control" placeholder="senha" require="required">
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col d-flex justify-content-center">
                                            <div class="form-group mostrar-senha">
                                                <input class="input-mostrar-senha" type="checkbox"  id="mostrar-senha-login" require="required">
                                                <label class="label-mostrar-senha" for="mostrar-senha-login">Mostrar Senha</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <a href="#">Esqueceu a senha?</a>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-warning w-50" style="margin-left:22%;">Acessar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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