<?php 
    require __DIR__ ."/vendor/autoload.php";
    require __DIR__ ."/sistema/bloqueio.php";
?>

<!doctype html>
<html lang="pt-br">
    <?php require __DIR__ ."/views/home/componentes/head.php" ?>
<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>
    
    
    <div class="fundo-pedido">
        <div class="container form-pedido">

            <h1 class="text-center text-white mt-5" style="font-family: 'Oswald', sans-serif;"><i class="bi bi-caret-right-fill"></i>Cria seu pedido<i class="bi bi-caret-left-fill"></i></h1>
    
            <form action="" class="form-pedido">
                
                <div class="form-group ">
                    <label for="name" class="text-white">Informe o nome da sua criação:</label>
                    <input type="text" class="form-control" id="name">
                    <small id="text" class="form-text  text-white">Seja Criativo(a).</small>
                </div>

                <div class="form-row">

                    <div class="form-group mt-5">

                        <label for="pao" class="text-white">Escolha seu pão:</label><br>
                        <br>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao1">
                        <label class="form-check-label text-white" for="pao1"> Hambúrguer <span class="text-warning">(R$ 10,00)</span></label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao2">
                        <label class="form-check-label text-white" for="pao2">Brioche</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao3">
                        <label class="form-check-label text-white" for="pao3">Australiano</label>
                        </div>
                
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao4">
                        <label class="form-check-label text-white" for="pao4">Bengala</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao5">
                        <label class="form-check-label text-white" for="pao5">Cebola</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao6">
                        <label class="form-check-label text-white" for="pao6">Francês</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao7">
                        <label class="form-check-label text-white" for="pao7">Batata</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao8">
                        <label class="form-check-label text-white" for="pao8">Leite</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao9">
                        <label class="form-check-label text-white" for="pao9">Forma</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pao" id="pao" value="pao10">
                        <label class="form-check-label text-white" for="pao10">Alentejano</label>
                        </div>
                        
                    </div>

                    <div class="form-group mt-5">

                        <label for="queijo" class="text-white">Escolha seu queijo:</label>
                    
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="queijo1" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Mussarela</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo2" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Parmesão</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo3" id="queijo">
                            <label class="form-check-label text-white" for="queijo"> Prato</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo4" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Gorgonzola</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo5" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Cheddar</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo6" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Requeijão</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo7" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Provolone</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo8" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Edam</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo9" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Ricota</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="queijo10" id="queijo">
                            <label class="form-check-label text-white" for="queijo">Mascarpone</label>
                        </div>

                    </div>

                    <div class="form-group mt-5">

                        <label for="salada" class="text-white">Escolha sua salada:</label>

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="salada1" id="salada">
                            <label class="form-check-label text-white" for="salada">Alface <span class="text-warning">(R$ 10,00)</span></label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada2" id="salada">
                            <label class="form-check-label text-white" for="salada">Tomate</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada3" id="salada">
                            <label class="form-check-label text-white" for="salada">Cebola</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada4" id="salada">
                            <label class="form-check-label text-white" for="salada">Picles</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada5" id="salada">
                            <label class="form-check-label text-white" for="salada">Repolho</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada6" id="salada">
                            <label class="form-check-label text-white" for="salada">Ervilha</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada7" id="salada">
                            <label class="form-check-label text-white" for="salada">Milho</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada8" id="salada">
                            <label class="form-check-label text-white" for="salada">Cenoura</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada9" id="salada">
                            <label class="form-check-label text-white" for="salada">Batata</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="salada10" id="salada">
                            <label class="form-check-label text-white" for="salada">Pimentão</label>
                        </div>

                    </div>

                    <div class="form-group mt-5">

                        <label for="carne" class="text-white">Escolha sua carne:</label>

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="carne1" id="carne">
                            <label class="form-check-label text-white" for="carne">Hambúrguer</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne2" id="carne">
                            <label class="form-check-label text-white" for="carne">Hambúrguer de Soja</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne3" id="carne">
                            <label class="form-check-label text-white" for="carne">Salsicha</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne4" id="carne">
                            <label class="form-check-label text-white" for="carne">Calabresa</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne5" id="carne">
                            <label class="form-check-label text-white" for="carne">Peito de Frango</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne6" id="carne">
                            <label class="form-check-label text-white" for="carne">Bacon</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne7" id="carne">
                            <label class="form-check-label text-white" for="carne">Frango Desfiado</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne8" id="carne">
                            <label class="form-check-label text-white" for="carne">Carne Fraldinha</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne9" id="carne">
                            <label class="form-check-label text-white" for="carne">Frango Desfiado</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carne10" id="carne">
                            <label class="form-check-label text-white" for="carne">Carne Patinho</label>
                        </div>

                    </div>

                    <div class="form-group mt-5">

                        <label for="frito" class="text-white">Escolha sua porção:</label>

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="frito1" id="frito">
                            <label class="form-check-label text-white" for="frito">Batata Frita</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito2" id="frito">
                            <label class="form-check-label text-white" for="frito">Frago a passarinho</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito3" id="frito">
                            <label class="form-check-label text-white" for="frito">Nuggets</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito4" id="frito">
                            <label class="form-check-label text-white" for="frito">Kibe</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito5" id="frito">
                            <label class="form-check-label text-white" for="frito">Peixe Frito</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito6" id="frito">
                            <label class="form-check-label text-white" for="frito">Porção de Frios</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito7" id="frito">
                            <label class="form-check-label text-white" for="frito">Anéis de Cebola</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito8" id="frito">
                            <label class="form-check-label text-white" for="frito">Mandioca Frita</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito9" id="frito">
                            <label class="form-check-label text-white" for="frito">Porção de Carne</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="frito10" id="frito">
                            <label class="form-check-label text-white" for="frito">Porção de Calabresa</label>
                        </div>

                    </div>

                    <div class="form-group mt-5">

                        <label for="molho" class="text-white">Escolha seu molho:</label>

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="molho1" id="molho">
                            <label class="form-check-label text-white" for="molho">Ketchup </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho2" id="molho">
                            <label class="form-check-label text-white" for="molho">Maionese</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho3" id="molho">
                            <label class="form-check-label text-white" for="molho">Mostarda</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho4" id="molho">
                            <label class="form-check-label text-white" for="molho">Barbecue</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho5" id="molho">
                            <label class="form-check-label text-white" for="molho">Molho de Alho</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho6" id="molho">
                            <label class="form-check-label text-white" for="molho">Molho de Pimenta</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho7" id="molho">
                            <label class="form-check-label text-white" for="molho">Molho  Cheddar</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho8" id="molho">
                            <label class="form-check-label text-white" for="molho">Molho  Vegano</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho9" id="molho">
                            <label class="form-check-label text-white" for="molho">Molho Béchamel</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="molho10" id="molho">
                            <label class="form-check-label text-white" for="molho">Molho Tártaro</label>
                        </div>

                    </div>
                </div>    
                <div class="text-center mt-5">
                    <button class="btn btn-dark">Fazer pedido</button>
                </div>
            </form>
        </div>
    </div>
    
 

    <?php require __DIR__ ."/views/home/componentes/footer.php" ?>
</body>

</html>