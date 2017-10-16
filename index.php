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
        <script language="javascript" src="_javascript/parent.js" ></script>

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
        <iframe src="modelos/header.html" name="janela" id="frame-header" 
                frameBorder="0" scrolling="no" ></iframe>-->

        <!-- include -->
        <?php $pagina="index"; include"./modelos/header.php";?>

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

        <!-- Display the countdown timer in an element -->
        <p id="demo"style="font-family: 'Courgette', cursive;"></p>

        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Oct 14, 2017 23:59:59").getTime();

            // Update the count down every 1 second
            var x = setInterval(function () {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                        + minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>

        <!--PRODUTOS////////////////////////////////////////////////////////-->
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