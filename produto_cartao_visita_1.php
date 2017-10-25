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
        <link rel="stylesheet" type="text/css" href="_css/genericos/btns.css"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >
        <!--FontAwesome -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

        //PAGINATOR PRODUTOS------------------------------------------------------------
        function mudaEstilo(controle) {
            var imgCartao0 = document.getElementById("corCaneca0");
            var imgCartao1 = document.getElementById("corCaneca1");
            var imgCartao2 = document.getElementById("corCaneca2");
            var imgCartao3 = document.getElementById("corCaneca3");

            if (controle === 1) {
                imgCartao0.style.display = "";
                imgCartao0.style.display = "none";
                imgCartao0.style.display = "none";
                imgCartao0.style.display = "none";
            } else if (controle === 2) {
                imgCartao0.style.border = "none";
                imgCartao1.style.border = "1px solid #27cbc0";
                imgCartao2.style.border = "none";
                imgCartao3.style.border = "none";
            } else if (controle === 3) {
                imgCartao0.style.border = "none";
                imgCartao1.style.border = "none";
                imgCartao2.style.border = "1px solid #27cbc0";
                imgCartao3.style.border = "none";
            } else {
                imgCartao0.style.border = "none";
                imgCartao1.style.border = "none";
                imgCartao2.style.border = "none";
                imgCartao3.style.border = "1px solid #27cbc0";
            }
        }
    </script>

    <body style="font-family: 'Share Tech Mono', monospace; margin: 0px 0px 0px 0px; background-color: #ebebeb;">
        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        include './_model/Categoria.php';
        include"./modelos/header.php";
        ?>

        <div class="row no-gutters" style="margin: 20px 10%; ">
            <!--SLIDE PRODUTO////////////////////////////////////////////////-->
            <div class="col-8" id="corpo" style="padding: 20px 15%;">
                <div id="carouselProdutoImagens" class="carousel slide" style="width: 100%;">
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
                </div>

                <!--Paginator dos produtos-->
                <div class="container" style="padding-top: 30px; font-family: 'Open Sans', sans-serif;">
                    <div class="row justify-content-md-center">
                        <div class="col-12 paginatorProdutos text-center">
                            <a id="a_mais_vendidos" onclick="mudaEstilo(1)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                               data-slide-to="0" >
                                <img id="imgCartao0" src="_imagens/_cartao_de_visita/1.png" alt="First slide" style="width: 24%;"></a>
                            <a id="a_lancamentos" onclick="mudaEstilo(2)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens" 
                               data-slide-to="1">
                                <img id="imgCartao1" src="_imagens/_cartao_de_visita/2.png" alt="First slide" style="width: 24%;"></a>
                            <a id="a_em_breve" onclick="mudaEstilo(3)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens" 
                               data-slide-to="2">
                                <img id="imgCartao2" src="_imagens/_cartao_de_visita/3.png" alt="First slide" style="width: 24%;"></a>
                            <a id="a_em_breve" onclick="mudaEstilo(4)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens" 
                               data-slide-to="3">
                                <img id="imgCartao3" src="_imagens/_cartao_de_visita/4.png" alt="First slide" style="width: 24%;"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!--TEXTO PRODUTO////////////////////////////////////////////////-->
            <div class="col-4"  id="lateral" style="font-family: 'Pragati Narrow', sans-serif; padding: 20px;">
                <!--nome-->
                <div class="row justify-content-md-center" style="margin-top: 20px;">
                    <h1 id="nome_produto" style="font-weight: bold;">CANECA DE PORCELANA</h1>
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
                <script>
                    /*function somar() {
                     $valor = parseInt(document.getElementById("cQuantidade").value);
                     document.getElementById("cQuantidade").value = $valor + 1;
                     }
                     
                     function sub() {
                     $valor = parseInt(document.getElementById("cQuantidade").value);
                     if ($valor <= 1) {
                     document.getElementById("cQuantidade").value = $valor;
                     } else {
                     document.getElementById("cQuantidade").value = $valor - 1;
                     }
                     }*/

                     function quanti(){
                         $valor = document.getElementById("cQuantidade").value;
                         document.getElementById("cQuanti").value = "/ " + $valor + " Unidades";
                     }
                </script>
                <style>
                    /*input[type=number]::-webkit-inner-spin-button, 
                    input[type=number]::-webkit-outer-spin-button { 
                        -webkit-appearance: none; 
                    }*/
                </style>
                <!--quantidade-->
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-auto">
                        <input type="number" name="tQuantidade" id="cQuantidade" size="5" maxlength="5" value="" min="1" required  onclick="quanti()"/>
                    </div>
                    <div class="col-md-auto">
                        <input style="border: none;" type="text" name="tQuanti" id="cQuanti"  value="" readonly/>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px;">
                    <h6>Cor:</h6>
                </div>
                <div id="div_corProduto" class="row" >
                    <a onclick="mudaEstilo(1)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                       data-slide-to="0" ><div class="coresSelecionar" style="background-color: white;">
                            <span class="fa fa-check fa-lg"></span></div>
                    </a>
                    <a onclick="mudaEstilo(2)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                       data-slide-to="1" ><div class="coresSelecionar" style="background-color: red;">
                            <span class="fa fa-check fa-lg"></span></div>
                    </a>
                    <a onclick="mudaEstilo(3)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                       data-slide-to="2" ><div class="coresSelecionar" style="background-color: black;">
                            <span class="fa fa-check fa-lg"></span></div>
                    </a>
                    <a onclick="mudaEstilo(4)" href="#carouselProdutoImagens" data-target="#carouselProdutoImagens"
                       data-slide-to="3" ><div class="coresSelecionar" style="background-color: green;">
                            <span class="fa fa-check fa-lg"></span></div>
                    </a>
                </div>
                <div class="row justify-content-md-center" style="margin-top: 20px; border-bottom: 4px solid #808285; border-top: 4px solid #808285;">
                    <div class="checkbox" style="width: 100%; ">
                        <label style="width: 100%; margin: 10px 10px;">
                            <input type="checkbox" value="">
                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                            <p style="margin: 0px 0px;">Li e aceito os termos de condição. <a>Leia mais</a></p>                      
                        </label>
                    </div>
                </div>

                <div class="row justify-content-md-center" style="margin-top: 20px;">
                    <div class="col">
                        <div class="row justify-content-md-center">
                            <h1 id="produto_preco">R$ 24,99 </h1>
                        </div>
                        <div class="row justify-content-md-center">
                            <h6>Unidade R$ 24,99</h6>
                        </div>
                    </div>
                    <div class="col">
                        <button type="button" class="btn botao_color_e47650" style="font-size: 25px; padding: 10px 30px;">COMPRAR</button>
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