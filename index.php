<?php require __DIR__ ."/vendor/autoload.php";?>
<!doctype html>
<html lang="pt-br">
    <?php require __DIR__ ."/views/home/componentes/head.php" ?>
<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>
    <main>
    <!--Carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="<?=asset('storage/banner/banner1.png')?>" class="d-block " id="Slide 1" alt="..."
            style="height: 650px;">
        </div>
        <div class="carousel-item">
          <img src="<?=asset('storage/banner/banner2.png')?>" class="d-block" id="Slide 2" alt="..."
            style="height: 600px;">
        </div>
        <div class="carousel-item">
          <img src="<?=asset('storage/banner/banner3.png')?>" class="d-block" id="Slide 3" alt="..."
            style="height: 600px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
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
                <img class="card-img-top " src="<?=asset('storage/lanches/lanche001.png')?>" alt="x-american">
                <div class="card-body">
                  <p class="card-text text-dark text-center">X-AMERICAN</p>
                  <p class="card-text text-dark ">Valor R$ 15,99</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-warning  btn-area">Comprar</button>
                      <button type="button" class="btn btn-outline-warning btn-area">Recriar</button>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top " src="<?=asset('storage/lanches/lanche002.png')?>" alt="x-american">
                <div class="card-body">
                  <p class="card-text text-center">X-TORRE EIFFEL</p>
                  <p class="card-text">valor R$ 13,99</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-warning btn-area">Comprar</button>
                      <button type="button" class="btn btn-outline-warning btn-area">Recriar</button>
                    </div>
                    <small class="text-muted">Bestmeal</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top " src="<?=asset('storage/lanches/lanche003.png')?>" alt="x-american">
                <div class="card-body">
                  <p class="card-text text-center">X-BACON</p>
                  <p class="card-text">valor R$ 12,99</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-warning btn-area">Comprar</button>
                      <button type="button" class="btn btn-outline-warning btn-area">Recriar</button>
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
              <img src="<?=asset('storage/time/equipe1.jpeg')?>" class="card-img-top" alt="imagem de perfil 1">
              <div class="card-body">
                <h5 class="card-title">Letícia Farias</h5>
                <p class="card-text">Estudante do IF</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card time mt-5">
              <img src="<?=asset('storage/time/equipe2.jpeg')?>" class="card-img-top" alt="imagem de perfil 2">
              <div class="card-body">
                <h5 class="card-title">Larissa Farias</h5>
                <p class="card-text">Estudante do IF</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card time mt-5">
              <img src="<?=asset('storage/time/equipe3.jpeg')?>" class="card-img-top" alt="imagem de perfil 3">
              <div class="card-body">
                <h5 class="card-title">João Vitor</h5>
                <p class="card-text">Estudante do IF</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-5">
            <div class="card time time-ste">
              <img src="<?=asset('storage/time/equipe4.jpeg')?>" class="card-img-top" alt="imagem de perfil 4">
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
            <h4>Quem somos?</h4>
            <p>Você deve estar se perguntando: Quem desenvolve uma plataforma, onde o cliente é o próprio inventor de
              sua alimentação? </p>
            <p> E por aqui eu digo, somos nós, o Bestmeal! Desenvolvido em 2022, por uma equipe especializada, este
              projeto tende-se à apresentar uma variedade de escolhas, onde você cliente, é o próprio chefe de seu
              lanche ou bebida, apresentando seus maiores gostos por culinária, dentro de seus padrões alimentícios.
            </p>
            <p>
              Quem não queria um site de lanches onde você pode inventar o que quiser? Um lanche vegano? Você pode ter!
              Um lanche sem glúten? Aqui tem! Um lanche com tudo que você possa gostar? É aqui o seu lugar!</p>
            <p>Clique no botão abaixo e conheça um pouquinho sobre nós!</p>
            <a href="#" class="main-btn" id="apply-btn">Saíba Mais</a>
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
 

  <?php require __DIR__ ."/views/home/componentes/footer.php" ?>
  <script src="<?=asset('separate/progressBar.min.js')?>"></script>
  <script src="<?=asset('separate/circle.js')?>"></script>
  
</body>

</html>