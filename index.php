<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gráfica PromoImpresso</title>

        <!--logo da pagina-->
        <link rel="shortcut icon" href="_imagens/icon/logo.png" />

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/genericos/btns.css"/>
        <link rel="stylesheet" type="text/css" href="_css/genericos/carouselProdutosGenerico.css"/>
        <link rel="stylesheet" type="text/css" href="_css/header_footer.css"/>

        <!--JAVASCRIPT-->
        <script language="javascript" src="_javascript/funcoes.js" ></script>
        <script language="javascript" src="_javascript/home.js" ></script>
        <script language="javascript" src="_javascript/_genericos/paginatorProdutosGenerico.js" ></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >

        <!--Fontes Gogle-->
        <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Expletus+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"><!--Modal produtos-->
    </head>

    <body style="font-family: 'Share Tech Mono', monospace; background-color: #D3D3D3;">
        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        include './_model/Categoria.php';
        include"./modelos/header.php";
        ?>

        <!--CAROUSEL////////////////////////////////////////////////////////-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"   >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="_imagens/banner/modeloBanner.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="_imagens/banner/modeloBanner2-2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="_imagens/banner/modeloBanner2-2.jpg" alt="First slide">
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

        <!--TIMER////////////////////////////////////////////////////////////-->
        <div id="div_promocao" class="row no-gutters" style="font-family: 'Open Sans', sans-serif; display: none;">
            <div class="col-2"></div>
            <!--descrição da promoção-->
            <div class="col-2 text-right" style="font-size: 17px; border-right: 1px solid black; padding-top: 5px; justify-content: center;">
                <div class="row no-gutters" style="margin-bottom: 0px; justify-content: center;">
                    <p style="margin-bottom: 0px; padding-bottom: 0px;">DIA DOS CADERNOS!</p>
                </div>
                <div class="row no-gutters" style="justify-content: center;">
                    <p style="padding-bottom: 0px; margin-bottom: 0px;">Todos os cadernos com...</p>
                </div>
            </div>
            <!--Timer e valor da promoção-->
            <div class="col-4 " style="border-right: 1px solid black;">
                <div class="row no-gutters">
                    <div class="col-3 text-center">
                        <div class="row no-gutters" style="margin-bottom: 0px; justify-content: center;">
                            <p style="text-indent: 0px; font-size: 30px; margin-bottom: 0px; padding-bottom: 0px;">20%</p>
                        </div>
                        <div class="row no-gutters" style="line-height:0px; 
                             justify-content: center;">
                            <p style="text-indent: 0px; padding-bottom: 0px; margin-bottom: 0px;">de desconto</p>
                        </div>
                    </div>
                    <div class="col-9 text-center" style="padding-top: 10px;">
                        <div id="div_timer" style="padding-top: 5px;">
                            <p id="timer_days"></p>
                            <p id="timer_hours"></p>
                            <p id="timer_mins"></p>
                            <p id="timer_secs"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--botão da promoção-->
            <div class="col-4 text-center" style="padding-top: 10px;">
                <button type="button" class="btn botao_color_e47650">CONFIRA</button>
            </div>
        </div>

        <!--PRODUTOS/////////////////////////////////////////////////////////-->
        <!--Paginator dos produtos-->
        <div class="container" style="padding-top: 30px; font-family: 'Open Sans', sans-serif;">
            <div class="row justify-content-md-center">
                <div class="col-2 paginatorProdutos text-center">
                    <a id="a_mais_vendidos" onclick="mudaEstilo(1)" href="#carouselProdutos" data-target="#carouselProdutos" data-slide-to="0"
                       style="border-bottom: 4px solid #27cbc0; color: #27cbc0;">
                        MAIS VENDIDOS</a></div>
                <div class="col-2 paginatorProdutos text-center">
                    <a id="a_lancamentos" onclick="mudaEstilo(2)" href="#carouselProdutos" data-target="#carouselProdutos" data-slide-to="1">
                        LANÇAMENTOS</a></div>
                <div class="col-2 paginatorProdutos text-center">
                    <a id="a_em_breve" onclick="mudaEstilo(3)" href="#carouselProdutos" data-target="#carouselProdutos" data-slide-to="2">
                        EM BREVE</a></div>
            </div>
        </div>

        <!--Carousel dos produtos-->
        <div id="carouselProdutos" class="carousel slide" style="font-family: 'Open Sans', sans-serif;">
            <div class="carousel-inner">
                <!--Mais vendidos-->
                <div class="carousel-item active" >
                    <div id="div_produtos_mais_vendidos">
                        <div class="row justify-content-md-center">
                            <div class="col">
                                <a class="a_hover" href="produto_cartao_visita.php" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto_cartao_visita.php" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div id="div_produtos_mais_vendidos">
                        <div class="row justify-content-md-center">
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div id="div_produtos_mais_vendidos">
                        <div class="row justify-content-md-center">
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a class="a_hover" href="produto-cartao-de-visita.html" style="display:block;">
                                    <div class="div_caixa_produto" >
                                        <div class="panel_de_botoes_ocultos"><!--Div de flutuação do botão oculto-->
                                            <div class="botoes_ocultos"><!--Botões ocultos-->
                                                <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="texto_produto">Cartão de Visita</h4>
                                                <img class="fotosProdutos" src="_imagens/produtos/cartaodevisita.png" alt="Card image cap">
                                                <h4 class="texto_produto">A partir de R$ 10,99</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--CLIENTES/////////////////////////////////////////////////////-->
        <h2 class="text-center" style="margin-top: 40px; margin-bottom: 40px; font-weight: bold;">
            MILHADES DE CLIENTES CONFIAM NA PROMOIMPRESSO</h2>

        <div class="row no-gutters justify-content-md-center" style="padding-bottom: 40px;">
            <ul id="clientes_links">
                <li><a href="https://www.facebook.com/promoimpresso/" target="_blank">
                        <img src="_imagens/_clientes/HarleyDavidsonlogo.png" alt="Facebook"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/bosch_logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/chick-fish-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/consigaz-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/embracon-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/eskimo-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/fabricadechocolate-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/fabricailusoes-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/mazusushibar-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/portoseguro-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/userede-logo.png" alt="Linkedin"/></a></li>

                <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                        <img src="_imagens/_clientes/zummrevista-logo.png" alt="Linkedin"/></a></li>
            </ul>
        </div>

        <!--FOOTER////////////////////////////////////////////////////////-->
        <?php
        $footer = "index";
        include"./modelos/footer.php";
        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>