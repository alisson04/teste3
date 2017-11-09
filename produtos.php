<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gráfica PromoImpresso</title>

        <!--logo da pagina-->
        <link rel="shortcut icon" href="_imagens/icon/logo.png" />

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="_css/produtos.css"/>
        <link rel="stylesheet" type="text/css" href="_css/genericos/checkBox_radio_tipo1.css"/>
        <link rel="stylesheet" type="text/css" href="_css/genericos/carouselProdutosGenerico.css"/>
        <link rel="stylesheet" type="text/css" href="_css/genericos/btns.css"/>
        <!--JAVASCRIPT-->
        <script language="javascript" src="_javascript/produtos.js" ></script>
        <script language="javascript" src="_javascript/_genericos/paginatorProdutosGenerico.js" ></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >
        <!--Fontes Gogle-->
        <link href="https://fonts.googleapis.com/css?family=Expletus+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet"><!--Texto do produto-->
    </head>

    <body style="font-family: 'Share Tech Mono', monospace; margin: 0px 0px 0px 0px; background-color: #ebebeb;">
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=1834432356831704';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        include './_model/Categoria.php';
        include "./modelos/header.php";

        $idCategoria = ($_GET['idCategoria']); //Categoria que é mostrada na pag
        $categoria = new Categoria();
        $stdObj = $categoria->findById($idCategoria);

        $materiais = explode(';', $stdObj->materiais);
        $cores = explode(';', $stdObj->cores);
        $tamanhos = explode(';', $stdObj->tamanhos);
        $imagens = explode(';', $stdObj->imagens);
        ?>

        <p id="status"></p>
        <div class="row no-gutters" style="margin: 20px 10%; ">
            <!--SLIDE PRODUTO////////////////////////////////////////////////-->
            <div class="col-8" id="corpo" style="padding: 20px 15%;">
                <div id="carouselProdutoImagens" class="carousel slide" style="width: 100%;">
                    <div class="carousel-inner">
                        <?php
                        foreach ($imagens as $key => $value) {
                            if ($key == 0) {
                                ?>
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo $value; ?>" alt="<?php echo 'Slide' . $value; ?>">
                                </div>
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo $value; ?>" alt="<?php echo 'Slide' . $value; ?>">
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <!--Paginator dos produtos-->
                <div class="container" style="padding-top: 30px; font-family: 'Open Sans', sans-serif;">
                    <div class="row justify-content-md-center">
                        <div class="col-12 text-center">
                            <?php foreach ($imagens as $key => $value) { ?>
                                <a href = "#carouselProdutoImagens" data-target="#carouselProdutoImagens" data-slide-to="<?php echo $key; ?>" >
                                    <img id="imgCartao0" src="<?php echo $value; ?>" alt="<?php echo 'SlidePag' . $key; ?>" style="width: 24%;"></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--TEXTO PRODUTO////////////////////////////////////////////////-->
            <div class="col-4"  id="lateral" style="font-family: 'Pragati Narrow', sans-serif; padding: 20px;">
                <!--nome-->
                <div class="row justify-content-md-center" style="margin-top: 20px;">
                    <h1 id="h1_nome_produto"     style="font-weight: bold;"><?php echo ($stdObj->nome); ?></h1>
                </div>
                <!--slogan-->
                <div class="row" style="margin-top: 20px;">
                    <h4 id="slogan_produto" style="color: #808285;">PERSONALIZE AQUI</h4>
                </div>
                <!--tipo-->
                <div class="row justify-content-md-center" style="margin-top: 20px;">
                    <div class="col-md-auto">
                        <button type="button" class="btn">Contratar criação</button>
                    </div>
                    <div class="col-md-auto">
                        <button type="button" class="btn">Anexar arquivo</button>
                    </div>
                </div>

                <!--CONFIGURAÇÂO----------------------------------------------->
                <form method="post" action="" >
                    <label for="cMaterial">Material:</label><!--Seleciona o material-->
                    <select class="custom-select form-control" id="cMaterial" name="tMaterial" required 
                            onchange="return calc_total('<?php echo $stdObj->nome; ?>')">
                                <?php foreach ($materiais as $key => $value) {
                                    ?>
                            <option value="<?php echo $value; ?>">
                                <?php echo $value; ?></option>
                        <?php } ?>
                    </select>

                    <label for="cCor">Cor:</label><!--Seleciona a cor-------------->
                    <select class="custom-select form-control" id="cCor" name="tCor" required onchange="return calc_total()">
                        <?php foreach ($cores as $key => $value) {
                            ?>
                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    </select>

                    <label for="cTamanho">Tamanho:</label><!--Seleciona o tamanho-->
                    <select class="custom-select form-control" id="cTamanho" name="tTamanho" 
                            required onchange="return calc_total()">
                                <?php foreach ($tamanhos as $key => $value) { ?>
                            <option value="<?php echo $value; ?>">
                                <?php echo $value; ?></option>
                        <?php } ?>
                    </select>

                    <input id="cId" type="text" value="<?php echo $stdObj->id; ?>" hidden/>
                </form>

                <!--QUANTIDADE------------------------------------------------->
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-auto">
                        <form method="POST" action="utils/CarrinhoAdd.php">
                            <input type="text" name ="tIdProduto" id="cIdProduto"  hidden
                                   value="<?php echo $value->id; ?>"/>
                            <input id="cQuantidade" type="number" name="tQuantidade"size="5" maxlength="5" value="1" min="1" required  
                                   oninput="quanti(cQuantidade, cQuanti); calc_total();"/>
                        </form>
                    </div>
                    <div class="col-md-auto">
                        <input style="border: none;" type="text" name="tQuanti" id="cQuanti"  value="" readonly/>
                    </div>
                </div>

                <!--CORES----------------------------------------------------
                <div class="row" style="margin-top: 20px;">
                    <h6>Cor:</h6>
                </div>
                <div id="div_corProduto" class="row" >
                    <a onclick="selecionaCorProduto(1)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                       data-slide-to="0" ><div class="coresSelecionar" style="background-color: white;">
                            <span id="corCaneca0" class="fa fa-check fa-lg" style="display: none"></span></div>
                    </a>
                    <a onclick="selecionaCorProduto(2)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                       data-slide-to="1" ><div class="coresSelecionar" style="background-color: red;">
                            <span id="corCaneca1" class="fa fa-check fa-lg" style="display: none"></span></div>
                    </a>
                    <a onclick="selecionaCorProduto(3)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                       data-slide-to="2" ><div class="coresSelecionar" style="background-color: black;">
                            <span id="corCaneca2" class="fa fa-check fa-lg" style="display: none"></span></div>
                    </a>
                    <a onclick="selecionaCorProduto(4)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                       data-slide-to="3" ><div class="coresSelecionar" style="background-color: green;">
                            <span id="corCaneca3" class="fa fa-check fa-lg" style="display: none"></span></div>
                    </a>
                </div>-->
                <div class="row justify-content-md-center" style="margin-top: 20px; border-bottom: 4px solid #808285; border-top: 4px solid #808285;">
                    <div class="checkbox" style="width: 100%; ">
                        <label style="width: 100%; margin: 10px 10px;">
                            <input type="checkbox" value="">
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <p style="margin: 0px 0px;">Li e aceito os termos de condição. <a>Leia mais</a></p>                      
                        </label>
                    </div>
                </div>

                <!--PREÇO TOTAL------------------------------------------------>
                <div class="row justify-content-md-center" style="margin-top: 20px;">
                    <div class="col">
                        <div class="row justify-content-md-center">
                            <input id="cTotalProduto" class="text-center" type="text" name="tTotalProduto" value="R$ 24,99" readonly/>
                        </div>
                        <div class="row justify-content-md-center">
                            <input style="border: none;" type="text" name="tPrecoUnitario" id="cPrecoUnitario"  value="" readonly/>
                        </div>
                    </div>
                    <div class="col">
                        <button type="button" class="btn botao_color_e47650" style="font-size: 25px; padding: 10px 30px;">COMPRAR</button>
                    </div>
                </div>

            </div>
        </div>
        <!--BOTÕES DE COMPARTINHAR--------------------------------------------->
        <div class="row no-gutters" style="margin-top: 20px;">
            <div class="col-md-auto">
                <ul id="social_share">
                    <li><a href="http://www.facebook.com/sharer.php?u=http://www.promoimpresso.com.br/articulos/1.php" target="_blank">
                            <img src="_imagens/icon/_sociais/_black/facebookBlack.png" alt="FacebookIcon"/></a></li>
                    <li><a href="http://twitter.com/home?status=http://www.meudominio.com" target="_blank">
                            <img src="_imagens/icon/_sociais/_black/twitterBlack.png" alt="InstagramIcon"/></a></li>
                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.promoimpresso.com.br/&amp;title=GraficaPromoImpresso" target="_blank">
                            <img src="_imagens/icon/_sociais/_black/linkedinBlack.png" alt="LinkedinIcon"/></a></li>
                    <li><a href="https://web.whatsapp.com/send?text=http://www.promoimpresso.com.br" target="_blank">
                            <img src="_imagens/icon/_sociais/_black/whatsappBlack.png" alt="GoogleIcon"/></a></li>
                    <li><a href="https://plus.google.com/share?url=http://www.promoimpresso.com.br" target="_blank">
                            <img src="_imagens/icon/_sociais/_black/googlePlusBlack.png" alt="GoogleIcon"/></a></li>
                </ul>
            </div>
        </div>

        <div class="row no-gutters justify-content-md-center" style="margin-top: 20px; background-color: #e1e1e1;">
            <h1>INFORMAÇÕES DO PRODUTO</h1>
        </div>

        <div class="row no-gutters" style="background-color: white; padding: 20px 5%; font-family: ">
            <!--DESCRIÇÃO DO PRODUTO/////////////////////////////////////////-->
            <!--Paginator de descrições-->
            <div class="container" style="padding-top: 30px; font-family: 'Open Sans', sans-serif;">
                <div class="row justify-content-md-center">
                    <div class="col-2 paginatorDescricaoProduto text-center">
                        <a id="a_produto" onclick="mudaPaginaDescricaoProdutos(1)" href="#carouselDescricaoProduto" 
                           data-target="#carouselDescricaoProduto" data-slide-to="0" style="border-bottom: 4px solid #27cbc0; color: #27cbc0;">
                            O PRODUTO</a></div>
                    <div class="col-2 paginatorDescricaoProduto text-center">
                        <a id="a_especificacoes" onclick="mudaPaginaDescricaoProdutos(2)" href="#carouselDescricaoProduto" 
                           data-target="#carouselDescricaoProduto" data-slide-to="1">
                            ESPECIFICAÇÕES</a></div>
                </div>
            </div>
            <!--Carousel dos produtos-->
            <div id="carouselDescricaoProduto" class="carousel slide" style="font-family: 'Open Sans', sans-serif; border-top: 2px solid #ebebeb;">
                <div class="carousel-inner">
                    <!--Mais vendidos-->
                    <div class="carousel-item active" >
                        <div id="div_produtos_mais_vendidos">
                            <p>Poucas coisas no mundo são tão boas quanto tomar uma boa caneca de café, não é verdade? Mas imagina só: o quão 
                                agradável  será, receber suas visitas com uma caneca personalizada ao seu estilo. Incrível, não é mesmo?</p>
                            <p>Aqui na Loja Online da "PROMOIMPRESSO" Gráfica digital, você personaliza a sua caneca e ainda pode escolher em
                                receber suas compras no conforto de sua casa, empresa ou escritorio! </p>
                            <p>Quer saber como?</p>
                            <p>O primeiro passo é escolher o conteúdo da sua personalização: pode ser sua arte, ou solicitando o serviços de criação de arte 
                                aqui mesmo em nosso site . Enfim, a escolha é sua.</p>
                            <p>Depois, você escolhe a quantidade de canecas que quer receber e, em seguida, clica em comprar!</p>
                            <p>Simples, não é?</p>
                            <p>Não perca tempo e compre a sua caneca personalizada na "PROMOIMPRESSO" Gráfica digital!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id="div_produtos_mais_vendidos">
                            <p>Poucas coisas no mundo são tão boas quanto tomar uma boa caneca de café, não é verdade?
                                Mas imagina só: o quão agradável  será, receber suas visitas com uma caneca personalizada ao seu estilo. Incrível, não é mesmo?</p>
                            <p>Aqui na Loja Online da "PROMOIMPRESSO" Gráfica digital, você personaliza a sua caneca e ainda pode escolher em receber suas 
                                compras no conforto de sua casa, empresa ou escritorio! </p>
                            <p>Quer saber como?</p>
                            <p>O primeiro passo é escolher o conteúdo da sua personalização: pode ser sua arte, ou solicitando o serviços de criação de arte 
                                aqui mesmo em nosso site . Enfim, a escolha é sua.</p>
                            <p>Depois, você escolhe a quantidade de canecas que quer receber e, em seguida, clica em comprar!</p>
                            <p>Simples, não é?</p>
                            <p>Não perca tempo e compre a sua caneca personalizada na "PROMOIMPRESSO" Gráfica digital!</p>
                        </div>
                    </div>
                </div>
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

        <div class="row no-gutters" style="background-color: #ebebeb; margin: 50px 0px;">
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