<ul class="navbar-nav  ms-auto mb-2 mb-lg-0 align-items-center">
       <?php if(isset($_SESSION['nome'])) { ?>
            <li class="nav-item">
                <a class=" nav-link small text-dark menu" aria-current="page" href="/TCC_Bestmeal/" id="home">Início</a>
            </li>
            <li class="nav-item">
                <a class=" nav-link small text-dark menu " href="/TCC_Bestmeal/criar.php" id="create">Criar pedido</a>
            </li>
            <li class="nav-item">
                <a class="  nav-link small text-dark menu" href="/TCC_Bestmeal/criacoes.php" id="created">Minhas criações</a>
            </li>
        <?php }?>


        <?php if(!isset($_SESSION['nome'])) { ?>
            
        <li class="nav-item">
            <a class=" nav-link small text-dark menu" href="/TCC_Bestmeal/usuario_formulario.php" id="cadastrar">Cadastrar</a>
        </li>


        <li class="nav-item">
            <a class=" nav-link small text-dark menu" href="/TCC_Bestmeal/login_formulario.php" id="entrar">Entrar</a>
        </li>

        <?php } ?>

        <?php if((isset($_SESSION['login']))
                && ($_SESSION['login']['usuarios']['adm'] ===1)) : ?>
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Usuários</a>
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

    
