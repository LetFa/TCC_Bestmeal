<div class="card">
    <div class="card-header">
        Menu
    </div>
    <div class="card-body">
        <ul class="nav flex-column">
        <a class="nav-link" href="usuarios.php">Home</a>
            <?php if((isset($_SESSION['login']))
                    && ($_SESSION['login']['usuarios']['adm'] ===1)) : ?>
            <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Cadastro</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<br>