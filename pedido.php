<?php 
    require __DIR__ ."/sistema/bloqueio.php";
    require_once 'includes/funcoes.php';
    require_once 'core/conexao_mysql.php';
    require_once 'core/sql.php';
    require_once 'core/mysql.php';

    //session_start();
    foreach($_GET as $indice => $dado){
        $$indice = limparDados($dado);
    }    
    if(isset($id)){
                $_SESSION['pedido'][$id] = $id; 
    }
?>

<!doctype html>
<html lang="pt-br">
    <?php require __DIR__ ."/views/home/componentes/head.php" ?>
<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>
   
    <h1 class="text-center mt-5">Página de finalizar o pedido</h1>

    <div>
    <?php
        if(isset($_SESSION['pedido']))
        {        
            $total  = 0;
            foreach($_SESSION['pedido'] as $pedido){            
                $produtos = buscar(
                    'produtos',
                    ['*'],
                    [['id', '=', $pedido]]
                );
                //echo $pedido;
               // echo $produtos[0]['nome'];
               // echo $produtos[0]['preco'];
               // echo $produtos[0]['ingredientes'];
                $total += (float)$produtos[0]['preco'];
                echo  "<br>";
            }
            //echo $total;
        }

    ?>
    </div>
    
   
  <?php
   
    if(isset($_SESSION['pedido']))
        
            foreach($_SESSION['pedido'] as $pedido):     
                $produtos = buscar(
                    'produtos',
                    ['*'],
                    [['id', '=', $pedido]]
                );                         
            
?>
    <div class="py-5">
    <div class="container">
      <div class="row hidden-md-up">
        <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">
                   <?php echo $produtos[0]['nome']; ?>
              </h4>
              <h6 class="card-subtitle text-muted"><?php echo $produtos[0]['preco'];?></h6>
              <p class="card-text p-y-1"><?php echo $produtos[0]['ingredientes'];?></p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    endforeach;
    ?>

      <div class="container mt-5">
        <div class="col-md-12">
             <h2 class="text-center">Valor total da compra</h2>
             <div class="text-center">
             <?php echo $total; ?>
             </div>
      </div>
    </div>

</div>

    <?php require __DIR__ ."/views/home/componentes/footer.php" ?>
</body>

</html>