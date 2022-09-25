<?php 
    require __DIR__ ."/vendor/autoload.php";
    require __DIR__ ."/sistema/bloqueio.php";
?>

<!doctype html>
<html lang="pt-br">
    <?php require __DIR__ ."/views/home/componentes/head.php" ?>
<body>

    <?php require __DIR__ . '/views/home/componentes/navbar.php' ?>
  
<div id="app">
    <div>
        <img class="w-100 " src="<?= asset('') ?>/resources/assets/storage/banner/tela-cardapio.png" alt="">
    </div>
    <div class="container">
        <h2 class="text-center mt-5 app-titulo">Monte seu lanche</h2>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <span class="text-danger text-center fs-4" v-for="e in errors">{{ e }}</span>
                    <section v-if="step == 1">
                        <h5 class="mt-3 app-subtitulo">Escolha seu pão</h5>
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao1" value="Pão de Hambúrguer">
                                    <label for="pao1">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao1.png') ?>">
                                        <p>Pão de Hambúrguer</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao2" value="Mini Pão de Hambúrguer">
                                    <label for="pao2">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao2.png') ?>">
                                        <p>Mini Pão de Hambúrguer</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao3" value="Pão Brioche">
                                    <label for="pao3">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao3.png') ?>">
                                        <p>Pão Brioche</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao4" value="Pão Baguete">
                                    <label for="pao4">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao4.png') ?>">
                                        <p>Pão Baguete</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao5" value="Pão de Forma">
                                    <label for="pao5">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao5.png') ?>">
                                        <p>Pão de Forma</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao6" value="Pão de Hot Dog">
                                    <label for="pao6">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao6.png') ?>">
                                        <p>Pão de Hot Dog </span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao7" value="Pão de Hambúrguer Rosa">
                                    <label for="pao7">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao7.png') ?>">
                                        <p>Pão de Hambúrguer Rosa</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao8" value="Pão de Hambúrguer Azul">
                                    <label for="pao8">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao8.png') ?>">
                                        <p>Pão de Hambúrguer Azul</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao9" value="Pão de Hambúrguer Verde">
                                    <label for="pao9">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao9.png') ?>">
                                        <p>Pão de Hambúrguer Verde</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao10" value="Pão de Frances Redondo">
                                    <label for="pao10">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao10.png') ?>">
                                        <p>Pão de Francês Redondo</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao11" value="Pão de Hambúrguer com cebola">
                                    <label for="pao11">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao11.png') ?>">
                                        <p>Pão de Hambúrguer com cebola</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper pao">
                                    <input v-model="form.pao" type="radio" id="pao12" value="Pão de Hot Dog Australiano">
                                    <label for="pao12">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/pao/pao12.png') ?>">
                                        <p>Pão de Hot Dog Australiano</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section v-if="step == 2">
                        <h5 class="mt-3 app-subtitulo">Escolha seu Queijo</h5>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo1" value="Queijo Mussarela">
                                    <label for="queijo1">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo1.png') ?>">
                                        <p>Queijo Mussarela</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo2" value="Queijo Provolone">
                                    <label for="queijo2">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo2.png') ?>">
                                        <p>Queijo Provolone</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo3" value="Queijo Gorgonzola">
                                    <label for="queijo3">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo3.png') ?>">
                                        <p>Queijo Gorgonzola</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo4" value="Queijo Cottage">
                                    <label for="queijo4">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo4.png') ?>">
                                        <p>Queijo Cottage</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo5" value="Queijo Mascarpone">
                                    <label for="queijo5">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo5.png') ?>">
                                        <p>Queijo Mascarpone</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo6" value="Queijo Ricota">
                                    <label for="queijo6">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo6.png') ?>">
                                        <p>Queijo Ricota</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo7" value="Queijo  Parmesão">
                                    <label for="queijo7">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo7.png') ?>">
                                        <p>Queijo Parmesão</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo8" value="Queijo  Edam">
                                    <label for="queijo8">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo8.png') ?>">
                                        <p>Queijo Edam</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo9" value="Queijo Cheddar">
                                    <label for="queijo9">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo9.png') ?>">
                                        <p>Queijo Cheddar</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo10" value="Queijo Brie">
                                    <label for="queijo10">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo10.png') ?>">
                                        <p>Queijo Brie</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo11" value="Queijo Prato">
                                    <label for="queijo11">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo11.png') ?>">
                                        <p>Queijo Prato</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper queijo">
                                    <input v-model="form.queijo" type="radio" id="queijo12" value="Queijo Minas Frescal">
                                    <label for="queijo12">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/queijos/queijo12.png') ?>">
                                        <p>Queijo Minas Frescal</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section v-if="step == 3">
                        <h5 class="mt-3 app-subtitulo">Escolha sua carne</h5>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne1" value="Hambúrguer">
                                    <label for="carne1">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/carnes/carne1.png') ?>">
                                        <p>Hambúrguer</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne2" value="Filé de Frango">
                                    <label for="carne2">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/carnes/carne2.png') ?>">
                                        <p>Filé de Frango</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne3" value="Hambúrguer Vegetariano">
                                    <label for="carne3">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/carnes/carne3.png') ?>">
                                        <p>Carne Vegetariano</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne4" value="Carne Picanha">
                                    <label for="carne4">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/carnes/carne4.png') ?>">
                                        <p>Carne Picanha</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne5" value="Hambúrguer de Peixe">
                                    <label for="carne5">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/carnes/carne5.png') ?>">
                                        <p>Hambúrguer de Peixe</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne6" value="Hambúrguer de Soja">
                                    <label for="carne6">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/carnes/carne6.png') ?>">
                                        <p>Hambúrguer de Soja</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne7" value="Bacon Frito">
                                    <label for="carne7">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/carnes/carne7.png') ?>">
                                        <p style="margin-left: 90px;">Bacon Frito</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne8" value="Frango Desfiado">
                                    <label for="carne8">
                                        <img class=" border rounded-3" src="<?= asset('storage/cardapio/carnes/carne8.png') ?>">
                                        <p style="margin-left: 85px;">Frango Desfiado</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne9" value="File Mion">
                                    <label for="carne9">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/carnes/carne9.png') ?>">
                                        <p style="margin-left: 110px;">File Mion</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne10" value="Carne Maminha">
                                    <label for="carne10">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/carnes/carne10.png') ?>">
                                        <p>Carne Maminha</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne11" value="Salsicha">
                                    <label for="carne11">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/carnes/carne11.png') ?>">
                                        <p style="margin-left: 110px;">Salsicha</span>
                                    </label>
                                </div>
                                <div class="col-md-4 wrapper carne">
                                    <input v-model="form.carne" type="radio" id="carne12" value="Calabresa">
                                    <label for="carne12">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/carnes/carne12.png') ?>">
                                        <p style="margin-left: 110px;">Calabresa</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <section v-if="step == 4">
                    <h5 class="mt-3 app-subtitulo">Escolha sua salada</h5>
                        <div class="container">
                            <div class="row">

                                <div class="col-md-4 wrapper salada">
                                    <input v-model="form.salada" type="radio" id="salada1" value="tomate">
                                    <label for="salada1">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada1.png') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Tomate</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper">
                                    <input v-model="form.salada" type="radio" id="salada2" value="cenoura">
                                    <label for="salada2">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada2.png') ?>" style="width:80%;margin-left:30px;">
                                        <p style="margin-left:140px;">Cenoura</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper">
                                    <input v-model="form.salada" type="radio" id="salada3" value="alface">
                                    <label for="salada3">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada3.png') ?>" style="width:80%;">
                                        <p style="margin-left:120px;">Alface</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper">
                                    <input v-model="form.salada" type="radio" id="salada4" value="repolho verde">
                                    <label for="salada4">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada4.png') ?>" style="width:80%;">
                                        <p style="margin-left:85px;">Repolho verde</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper">
                                    <input v-model="form.salada" type="radio" id="salada5" value="Cebola Branca">
                                    <label for="salada5">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada6.png') ?>" style="width:80%;">
                                        <p style="margin-left:85px;">Cebola Branca</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper">
                                        <input v-model="form.salada" type="radio" id="salada6" value="repolho roxo">
                                        <label for="salada6">
                                            <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada5.png') ?>" style="width:80%;margin-left:-10px;">
                                            <p style="margin-left:85px;">Repolho Roxo</span>
                                        </label>
                                    </div>

                                <div class="col-md-4 wrapper">
                                        <input v-model="form.salada" type="radio" id="salada7" value="Cebola Roxa">
                                        <label for="salada7">
                                            <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada7.png') ?>" style="width:80%;margin-left:-10px;">
                                            <p style="margin-left:85px;">Cebola Roxo</span>
                                        </label>
                                    </div>


                                <div class="col-md-4 wrapper">
                                        <input v-model="form.salada" type="radio" id="salada8" value="Plices">
                                        <label for="salada8">
                                            <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada8.png') ?>" style="width:80%;margin-left:10px;">
                                            <p style="margin-left:130px;">Plices</span>
                                        </label>
                                    </div>

                                <div class="col-md-4 wrapper">
                                        <input v-model="form.salada" type="radio" id="salada9" value="Ervilha">
                                        <label for="salada9">
                                            <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada9.png') ?>" style="width:80%;margin-left:10px;">
                                            <p style="margin-left:130px;">Ervilha</span>
                                        </label>
                                    </div>
                           

                                <div class="col-md-4 wrapper">
                                        <input v-model="form.salada" type="radio" id="salada10" value="Milho">
                                        <label for="salada10">
                                            <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada10.png') ?>" style="width:80%;margin-left:10px;">
                                            <p style="margin-left:130px;">Milho</span>
                                        </label>
                                    </div>
                                
                                    <div class="col-md-4 wrapper">
                                        <input v-model="form.salada" type="radio" id="salada11" value="Aceitona Verde">
                                        <label for="salada11">
                                            <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada11.png') ?>" style="width:80%;margin-left:10px;">
                                            <p style="margin-left:100px;">Aceitona Verde</span>
                                        </label>
                                    </div>

                                    <div class="col-md-4 wrapper">
                                        <input v-model="form.salada" type="radio" id="salada12" value="Aceitona Preta">
                                        <label for="salada12">
                                            <img class="border rounded-3" src="<?= asset('storage/cardapio/salada/salada12.png') ?>" style="width:80%;margin-left:10px;">
                                            <p style="margin-left:100px;">Aceitona Preta</span>
                                        </label>
                                    </div>
                                </div> 


                            </div> 
                    </section>

                    <section v-if="step == 5">
                    <h5 class="mt-3 app-subtitulo">Escolha seu frito</h5>
                        <div class="container">
                            <div class="row">

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito1" value="Cebola Frita">
                                    <label for="frito1">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito1.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Cebola Frita</span>
                                    </label>
                                </div>
                            
                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito2" value="Batata Frita">
                                    <label for="frito2">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito2.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Batata Frita</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito3" value="Peixe Frito">
                                    <label for="frito3">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito3.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Peixe Frito</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito4" value="Mandioca Frita">
                                    <label for="frito4">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito4.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:100px;">Mandioca Frita</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito5" value="Frango Frito">
                                    <label for="frito5">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito5.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Frango Frito</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito6" value="Carne de Porco">
                                    <label for="frito6">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito6.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Carne de Porco</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito7" value="Nugget de Frango">
                                    <label for="frito7">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito7.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:93px;">Nugget de Frango</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito8" value="Camarão Frito">
                                    <label for="frito8">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito8.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Camarão Frito</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito9" value="Calabresa Frita">
                                    <label for="frito9">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito9.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Calabresa Frita</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito10" value="Ovo Frito">
                                    <label for="frito10">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito10.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:110px;">Ovo Frito</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito11" value="Batata com Cheddar">
                                    <label for="frito11">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito11.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:90px;">Batata com Cheddar</span>
                                    </label>
                                </div>

                                <div class="col-md-4 wrapper frito">
                                    <input v-model="form.frito" type="radio" id="frito12" value="Kibe">
                                    <label for="frito12">
                                        <img class="border rounded-3" src="<?= asset('storage/cardapio/frito/frito12.jpeg') ?>" style="width:88%;">
                                        <p style="margin-left:140px;">Kibe</span>
                                    </label>
                                </div>

                            </div>
                        </div>        
                    </section>

                    <section v-if="step == 6">
                        <h5>De um nome para a sua criação</h3>
                            <textarea v-model="form.message" placeholder="Insira aqui " class="form-control"></textarea>
                    </section>

                    <section v-if="step == 7" class="text-center">
                        <h4 class="mt-5">Resumo do pedido</h4>
                        <p>Pão escolhido: {{form.pao}}</p>
                        <p>Queijo escolhido: {{form.queijo}}</p>
                        <p>Carne escolhido: {{form.carne}}</p>
                        <p>Salada escolhido: {{form.salada}}</p>
                        <p>Frito escolhido: {{form.frito}}</p>
                        <p>Nome do lanche: {{form.message}}</p>
                    </section>

                    
                   


                    <div class="mt-3 text-end btn-cardapio">
                        <button class="btn btn-warning" v-if="step != 1" @click.prevent="prevStep">Anterior</button>
                        <button class="btn btn-warning" v-if="step != totalsteps" @click.prevent="nextStep">Próximo</button>
                        <button class="btn btn-warning" v-if="step == 6" @click.prevent="send">Fazer Pedido!</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

    <?php require __DIR__ ."/views/home/componentes/footer.php" ?>
    <script src="<?= asset('separate/vue.js') ?>"></script>
    <script src="<?= asset('separate/app.js') ?>"></script>
</body>

</html>