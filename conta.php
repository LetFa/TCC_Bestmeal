<?php require __DIR__ ."/vendor/autoload.php" ?>
<!doctype html>
<html lang="pt-br">
    <?php require __DIR__ ."/views/home/componentes/head.php" ?>
<body>
    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 d-flex flex-column align-items-center">
            <img src="https://raw.githubusercontent.com/Rodrigotutz/Projeto-Bestmeal/master/resources/assets/storage/perfil/perfil.jpeg" class="w-75 perfil-img" alt="Foto de Perfil">
            <form class="mt-3">
                <label for="perfil" class="form-label">Selecione sua foto:</label>
                <input id="perfil" name="perfil" type="file" class="form-control">
                <div class="text-center">
                    <button class="btn btn-primary mt-2">Salvar</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="container">
                <h3 class="text-center">Olá Usuário</h3>
                <div class="text-end">
                    <small>Criado em: 29/03/2020</small>
                </div>

                <form>
                    <div class="mt-4">
                        <label for="email">Seu e-mail:</label>
                        <input type="text" id="email"  class="form-control" readonly>
                    </div>
                    <div class="mt-3">
                        <label for="email">Seu telefone:</label>
                        <input type="text" id="email"  class="form-control" readonly>
                    </div>
                    <div class="mt-5">
                        <h5>Endereço:</h5>
                        <div class="row">
                        <div class="col-md-10">
                                <label for="rua">Rua:</label>
                                <input type="text" id="rua"  class="form-control" readonly>
                            </div>
                            <div class="col-md-2">
                            <label for="numero">N°</label>
                                <input type="text" id="numero"  class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="cidade" class="form-label">Cidade:</label>
                                    <input type="text" id="cidade"  class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="estado" class="form-label">Estado:</label>
                                    <input type="text" id="estado"  class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button class="btn btn-primary">Editar dados</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
    <?php require __DIR__ ."/views/home/componentes/footer.php" ?>
</body>

</html>