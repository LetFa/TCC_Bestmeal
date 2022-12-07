<ul class="navbar-nav  ms-auto mb-2 mb-lg-0 align-items-center">

       <?php if(isset($_SESSION['login']['usuarios']['nome'])): ?>
            <li class="nav-item">
                <a class=" nav-link small text-dark menu" aria-current="page" href="/TCC_Bestmeal/" id="home">Início</a>
            </li>
            <?php if( !((isset($_SESSION['login'])) && ($_SESSION['login']['usuarios']['adm'] === 1))) : ?>
                <li class="nav-item">
                    <a class=" nav-link small text-dark menu " href="/TCC_Bestmeal/produtos.php" id="create">Lanches prontos</a>
                </li>
                <li class="nav-item">
                    <a class="  nav-link small text-dark menu" href="/TCC_Bestmeal/pedido.php" id="pedido"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                </li>
            <?php endif; ?>
        <?php endif;?>


        <?php if(empty($_SESSION['login']['usuarios']['nome'])):?>
            
            <li class="nav-item">
                <a class=" nav-link small text-dark menu" href="/TCC_Bestmeal/usuario_formulario.php" id="cadastrar"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cadastrar</a>
            </li>


            <li class="nav-item">
                <a class=" nav-link small text-dark menu" href="/TCC_Bestmeal/login_formulario.php" id="entrar"><i class="fa-solid fa-user"></i> Entrar</a>
            </li>

        <?php endif;  ?>

        <?php if((isset($_SESSION['login'])) && ($_SESSION['login']['usuarios']['adm'] === 1)) : ?>
            <li class="nav-item">
                <a class="av-link small text-dark menu" href="cadastro.php">Cadastrar Produto</a>
            </li>
            <li class="nav-item">
                <a class="av-link small text-dark menu" href="produtos.php">Produtos</a>
            </li>

            <li class="nav-item">
                <a class="av-link small text-dark menu" href="pedidos.php">Pedidos</a>
            </li>

                
        <?php endif; ?>
        
        <?php if(isset($_SESSION["login"])) { ?>
            <div>
                <span>Olá <?= $_SESSION['login']['usuarios']['nome']?>!</span>
                <a href="core/usuario_repositorio.php?acao=logout"
                    class="btn btn-dark btn-sm" role="button">Sair</a>
            </div>
       <?php } ?>
</ul>
    
