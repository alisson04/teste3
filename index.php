<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gráfica PromoImpresso</title>

        <!--logo da pagina-->
        <link rel="shortcut icon" href="_imagens/icon/logo.png" />

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/header_footer.css"/>

        <!--JAVASCRIPT-->
        <script language="javascript" src="_javascript/funcoes.js" ></script>
        <script language="javascript" src="_javascript/timer.js" ></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >

        <!--Fontes Gogle-->
        <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Expletus+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"><!--Modal produtos-->
    </head>

    <body style="font-family: 'Share Tech Mono', monospace; margin: 0px 0px 0px 0px; background-color: #D3D3D3;">
        <!--HEADER////////////////////////////////////////////////////////
        <?php
        $pagina = "index";
        include"./modelos/header.php";
        ?>
        
        <!--CAROUSEL////////////////////////////////////////////////////////-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="_imagens/banner/modeloBanner.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Análise e Desenvolvimento de Sistemas</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="_imagens/banner/modeloBanner2-2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Java e orientação a objetos  </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="_imagens/banner/modeloBanner2-2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Web</h3>
                    </div>
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


        <!--Timer///////////////////////////////////////////////////////////-->
        <div id="div_promocao" class="row no-gutters" style="height: 70px; background-color: #27cbc0; color: white;">
            <div class="col-4 text-center" style="border-right: 1px solid black; padding-top: 15px;">
                <p class="text-left">DIA DOS CADERNOS!<br/> Todos os cadernos com...</p>
            </div>
            <div class="col-4 text-center" style=" padding-top: 15px;">
                <div class="row no-gutters">
                    <div class="col-4 text-center">
                        <p>20DD%<br/> de  desconto</p>  
                    </div>
                    <div id="div_timer" class="col-8 text-center">
                        <p id="timer_days"style="font-family: 'Courgette', cursive; "></p>
                        <p id="timer_hours"style="font-family: 'Courgette', cursive; text-align: center; display:inline;"></p>
                        <p id="timer_mins"style="font-family: 'Courgette', cursive; text-align: center; display:inline;"></p>
                        <p id="timer_secs"style="font-family: 'Courgette', cursive; text-align: center; display:inline;"></p>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center" style="border-left: 1px solid black; padding-top: 15px;">
                <button type="button" class="btn" style="background-color: #ea5b2b; color: white;">CONFIRA</button>
            </div>
        </div>

        <!--PRODUTOS////////////////////////////////////////////////////////-->
        <div id="div_produtos" class="container produtos">
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">IMÃ DE GELADEIRA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/ima.jpg" alt="Card image cap">
                                <a href="#" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">10 BLOCOS 2V</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/bloco.jpg" alt="Card image cap">
                                <a href="#" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container produtos">
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">IMÃ DE GELADEIRA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/ima.jpg" alt="Card image cap">
                                <a href="#" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">10 BLOCOS 2V</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/bloco.jpg" alt="Card image cap">
                                <a href="#" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container produtos">
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 >CARTÃO DE VISITA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.jpg" alt="Card image cap">
                                <a href="produto-cartao-de-visita.html" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">IMÃ DE GELADEIRA</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/ima.jpg" alt="Card image cap">
                                <a href="#" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card produtosHover" >
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">10 BLOCOS 2V</h4>
                                <img class="fotosProdutos" src="_imagens/produtos/bloco.jpg" alt="Card image cap">
                                <a href="#" class="btn btn-primary">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--FOOTER////////////////////////////////////////////////////////-->
        <iframe src="modelos/footer.html" name="janela" id="frame-footer" 
                frameBorder="0" scrolling="no" ></iframe>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>