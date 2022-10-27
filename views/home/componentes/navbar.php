<nav class="navbar navbar-expand-lg navbar-dark bg-light open-sans sticky-top text-center nav-shadow align-items-center" style="padding:2px 2px;">
  <div class="container" id="filter-btn-box">
    <a href="<?= SITE ?>/" class="navbar-brand fs-5 fw-bold">
    <img class="logo-bestmeal" src="<?= asset('storage/logo/bestmeal-logo.png') ?>">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-items-center " id="navbar">
      <?php require __DIR__."\links.php" ?>
    </div>
</nav>


