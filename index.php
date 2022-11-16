<?php
require __DIR__ . "/sistema/bloqueio.php";
?>

<!doctype html>
<html lang="pt-br">
<?php require __DIR__ . "/views/home/componentes/head.php" ?>

<body>
  <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>

  <main>
    <!--Carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="views/_resources/storage/banner/banner1.png" class="d-block " id="Slide 1" alt="..." style="height: 100%;">
        </div>
        <div class="carousel-item">
          <img src="views/_resources/storage/banner/banner2.png" class="d-block" id="Slide 2" alt="..." style="height: 100%;">
        </div>
        <div class="carousel-item">
          <img src="views/_resources/storage/banner/banner3.png" class="d-block" id="Slide 3" alt="..." style="height: 100%;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <!--lanches-->
      <div class="lanche-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center titulo-area">Conheça algumas criações</h1>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top " src="views/_resources/storage/lanches/lanche001.png" alt="x-american">
                <div class="card-body">
                  <p class="card-text text-dark text-center">X-AMERICAN</p>
                
                  <div class="lista-cardapio">
                    <ul>
                      <li><i class="bi bi-caret-right-fill"></i>2 Hambúrguer;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Alface;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Azeitona preta;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Cebola Roxa;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Pliques;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Bacon;</li>
                    </ul>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-warning">Comprar</button>
                    <p class="card-text text-success font" style="margin-left:1rem;">R$ 15,99</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top " src="views/_resources/storage/lanches/lanche002.png" alt="x-american">
                <div class="card-body">
                  <p class="card-text text-center">X-TORRE EIFFEL</p>
                  <div class="lista-cardapio">
                    <ul>
                      <li><i class="bi bi-caret-right-fill"></i>3 Hambúrguer;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Alface;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Cheddar;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Cebola;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Pliques;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Tomate;</li>
                    </ul>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning">Comprar</button>
                      <p class="card-text text-success font" style="margin-left:1rem;">R$ 13,99</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top " src="views/_resources/storage/lanches/lanche003.png" alt="x-american">
                <div class="card-body">
                  <p class="card-text text-center">X-BACON</p>
                  <div class="lista-cardapio">
                    <ul>
                      <li><i class="bi bi-caret-right-fill"></i>1 Hambúrguer;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Alface;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Queijo;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Cebola;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Bacon;</li>
                      <li><i class="bi bi-caret-right-fill"></i>Tomate;</li>
                    </ul>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning">Comprar</button>
                      <p class="card-text text-success font" style="margin-left:1rem;">R$ 17,99</p>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Equipe-->
    <div class="team-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center titulo-area team-titulo">Nossa equipe</h2>
          </div>
          <div class="col-md-3">
            <div class="card time mt-5">
              <img src="views/_resources/storage/time/equipe1.jpeg" class="card-img-top" alt="imagem de perfil 1">
              <div class="card-body">
                <h5 class="card-title">Letícia Farias</h5>
                <p class="card-text">Estudante do IF</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card time mt-5">
              <img src="views/_resources/storage/time/equipe2.jpeg" class="card-img-top" alt="imagem de perfil 2">
              <div class="card-body">
                <h5 class="card-title">Larissa Farias</h5>
                <p class="card-text">Estudante do IF</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card time mt-5">
              <img src="views/_resources/storage/time/equipe3.jpeg" class="card-img-top" alt="imagem de perfil 3">
              <div class="card-body">
                <h5 class="card-title">João Vitor</h5>
                <p class="card-text">Estudante do IF</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-5">
            <div class="card time time-ste">
              <img src="views/_resources/storage/time/equipe4.jpeg" class="card-img-top" alt="imagem de perfil 4">
              <div class="card-body">
                <h5 class="card-title">Stephanie Amorim</h5>
                <p class="card-text">Estudante do IF</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Quem somos-->
    <div id="apply-area">
      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-md-6 apply-box" id="company-img"></div>
          <div class="col-md-6 apply-box" id="pattern-img">
            <h4 class="text-center">Quem somos?</h4>
            <p class="text-center">Você deve estar se perguntando: Quem desenvolve uma plataforma, onde o cliente é o próprio inventor de
              sua alimentação? </p>
            <p class="text-center"> E por aqui eu digo, somos nós, o Bestmeal! Desenvolvido em 2022, por uma equipe especializada, este
              projeto tende-se à apresentar uma variedade de escolhas, onde você cliente, é o próprio chefe de seu
              lanche ou bebida, apresentando seus maiores gostos por culinária, dentro de seus padrões alimentícios.
            </p>
            <p class="text-center">
              Quem não queria um site de lanches onde você pode inventar o que quiser? Um lanche vegano? Você pode ter!
              Um lanche sem glúten? Aqui tem! Um lanche com tudo que você possa gostar? É aqui o seu lugar!</p>
            <p class="text-center">Clique no botão abaixo e conheça um pouquinho sobre nós!</p>
            <div class="text-center">
            <a href="#" class="main-btn" id="apply-btn">Saíba Mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Circle area-->
    <div id="data-area">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-3 circle-box">
            <div id="circleA"></div>
            <p>Lanches Entregues</p>
          </div>
          <div class="col-md-3 circle-box">
            <div id="circleB"></div>
            <p>Clientes Felizes</p>
          </div>
          <div class="col-md-3 circle-box">
            <div id="circleC"></div>
            <p>Colaboradores</p>
          </div>
          <div class="col-md-3 circle-box">
            <div id="circleD"></div>
            <p>Hamburguinhos</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php if (isset($_GET['criado'])) { ?>
    <?php if ($_GET['criado'] == 'sucesso') { ?>
      <div class="usuario-criado">
        <div class="alert alert-success text-center">
          <p class="fs-3">Usuário criado com sucesso</p>
          <a href="<?= SITE ?>/login_formulario.php" class="fs-4">Clique aqui para entrar</a>
        </div>
      </div>
    <?php } ?>
  <?php } ?>

  <?php if (isset($_GET['logado'])) { ?>
    <?php if ($_GET['logado'] == 'sucesso') { ?>
      <div class="usuario-criado">
        <div class="alert alert-info text-center">
          <p class="fs-3">Olá <?= $_SESSION['nome'] ?></p>
          <a href="<?= SITE ?>/" class="fs-4">Fechar</a>
        </div>
      </div>
    <?php } ?>
  <?php } ?>

  <?php require __DIR__ . "/views/home/componentes/footer.php" ?>
  <script src="./views/_resources/separate/progressBar.min.js" defer></script>
  <script src="./views/_resources/separate/circle.js" defer></script>

</body>

</html>