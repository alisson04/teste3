<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gráfica PromoImpresso</title>

        <!--logo da pagina-->
        <link rel="shortcut icon" href="_imagens/icon/logo.png" />

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="_css/header_footer.css"/>
        <link rel="stylesheet" type="text/css" href="_css/produtos.css"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >

        <!--Fontes Gogle-->
        <link href="https://fonts.googleapis.com/css?family=Expletus+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet"><!--Texto do produto-->
    </head>

    <script>
        function calc_total() {
            var qtd = parseFloat(document.getElementById('cQuantidade1').value);
            tot = qtd * 0.3;
            tot = parseFloat(tot.toFixed(3));
            document.getElementById('cTot').value = tot;
        }
    </script>

    <body style="font-family: 'Share Tech Mono', monospace; margin: 0px 0px 0px 0px;">
        <!--HEADER///////////////////////////////////////////////////////////-->
<?php
include './_model/Categoria.php';
include"./modelos/header.php";
?>

        <div id="interface" class="container">
            <!--SLIDE PRODUTO////////////////////////////////////////////////-->
            <section id="corpo">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="_imagens/_cartao_de_visita/1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="_imagens/_cartao_de_visita/2.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="_imagens/_cartao_de_visita/3.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="_imagens/_cartao_de_visita/4.png" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>

            <!--TEXTO PRODUTO////////////////////////////////////////////////-->
            <aside id="lateral" style="font-family: 'Pragati Narrow', sans-serif;">
                <div class="container">
                    <h1 id="nome_produto">Cartão de visita</h1>
                    <h2 id="slogan_produto">Slogan para o cartão</h2>

                    <h3 style="margin-top: 5%;">Utilidades do cartão</h3>
                    <h3>Utilidades do cartão</h3>
                    <h3>Utilidades do cartão</h3>

                    <h6 style="margin-top: 5%;">A partir de</h6>
                    <div class="row">
                        <div style="padding-left: 20px; padding-right: 10px;">
                            <h1 id="produto_preco">R$ 15,99 </h1>
                        </div>
                        <div style="padding-top: 20px;">
                            <h6>/ 25 unidades </h6>
                        </div>
                    </div>

                    <a style="font-size: 25px; padding-left: 15px;" href="#" class="btn btn-primary">Compre aqui</a>

                    <p>O Google enfim revelou as especificações completas do Google 
                        Glass, e com ele uma surpresa ainda inédita no mercado: a </p>
                </div>
            </aside>

            <!--CONFIGURAÇÃO PRODUTO/////////////////////////////////////////////-->
            <h1>Configure seu produto</h1>

            <div class="row no-gutters passosConfigProduto">
                <form method="post" oninput="calc_total();">
                    <fieldset><legend>Quantidade</legend>
                        <input id="cQuantidade1" type="number" name="tQuantidade" min="1" max="999999" value="1"/>
                        <label for="cQuantidade" ></label>

                        <p><label for="cTot">Preço Total:</label>
                            <input type="text" name="tTot" id="cTot" placeholder="Total a pagar" readonly/>
                        </p>

                        <input type="Text" name="operando1" value="" size="12" onKeyUp="maskIt(this, event, '###.###.###,##', true)" dir="rtl"> 
                        <br/> 
                    </fieldset>
                </form>
            </div>
            <div class="row no-gutters passosConfigProduto">
                <form method="post">
                    <fieldset><legend>Envie sua arte ou contrate a criação:</legend>
                        <div class="row no-gutters">
                            <div class="col-6" style="border: 1px solid black;">
                                <input type="radio" name="tSexo" id="cArteFinal"/><label for="cArteFinal" >
                                    <img src="_imagens/produtos/_config/pronto.png" alt="First slide" style="height: 100px;"><br/>
                                    Enviar minha arte final</label>
                            </div>
                            <div class="col-6">`
                                <input type="radio" name="tSexo" id="cCriacao"/><label for="cCriacao">Contratar criação</label>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="row no-gutters passosConfigProduto">
                <form method="post">
                    <fieldset><legend>Dimensões:</legend>
                        <input type="radio" name="tSexo" id="cTam1"/><label for="cTam1" >op1</label>
                        <input type="radio" name="tSexo" id="cTam2"/><label for="cTam2">op2</label>
                    </fieldset>
                </form>
            </div>
            <div class="row no-gutters passosConfigProduto">
                <form method="post">
                    <fieldset><legend>Impressão:</legend>
                        <input type="radio" name="tSexo" id="cFrente"/><label for="cFrente" >Frente</label>
                        <input type="radio" name="tSexo" id="cFrenteVerso"/><label for="cFrenteVerso">Frente e verso</label>
                    </fieldset>
                </form>
            </div>
            <div class="row no-gutters passosConfigProduto">
                <form method="post">
                    <fieldset><legend>Papel:</legend>
                        <input type="radio" name="tSexo" id="cPapel1"/><label for="cPapel1" >op</label>
                        <input type="radio" name="tSexo" id="cPapel2"/><label for="cPapel2">op</label>
                    </fieldset>  
                </form>
            </div>
            <div class="row no-gutters passosConfigProduto">
                <form method="post">                  
                    <fieldset><legend>Acabamento:</legend>
                        <input type="radio" name="tSexo" id="cAcabamento1"/><label for="cAcabamento1" >op</label>
                        <input type="radio" name="tSexo" id="cAcabamento2"/><label for="cAcabamento2">op</label>
                    </fieldset> 
                </form>
            </div>
            <div class="row no-gutters passosConfigProduto">
                <form method="post">
                    <fieldset><legend>Extras:</legend>
                        <input type="radio" name="tSexo" id="cExtra1"/><label for="cExtra1" >op</label>
                        <input type="radio" name="tSexo" id="cExtra2"/><label for="cExtra2">op</label>
                    </fieldset>
                </form>
            </div>
        </div>

        <!--FOOTER////////////////////////////////////////////////////////-->
<?php
$footer = "index";
include"./modelos/footer.php";
?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>