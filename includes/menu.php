<div class="card">
    <div class="card-header">
        Menu
    </div>
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usuario_formulario.php">Cadastrar</a>
            </li>
         
            
            <?php if((isset($_SESSION['login']))
                    && ($_SESSION['login']['usuarios']['adm'] ===1)) : ?>
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Cadastro</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<br>