<?php

function __autoload($class) {
    require_once '_model/' . $class . '.php';
}

$categoria = new Categoria(); //Necessário para listar as categorias de produtos
?>

<!DOCTYPE html>
<html>
    <head>
        <title>adasdasdas</title>
        <meta charset="UTF-8">

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="_css/header.css"/>

        <!--fonte Google-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!--JAVASCRIPT-->
        <script language="javascript" src="_javascript/header.js" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--AJAX-->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >

        <!--FontAwesome -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <header id="cabecalho" style="font-family: 'Open Sans', sans-serif;">
            <!--TOPO DO CABEÇALHO-->
            <div id="div_topo_cabecalho" class="container-fluid" >
                <!--MENU PRINCIPAL-->
                <!--<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xg-6">-->
                <div class="row justify-content-end" style="height: 25px; ">
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xg-1">
                        <p class="text-center">
                            <a href="#" target="_parent" class="text-center">Central de ajuda
                                <img id="icon_interrogacao" class="iconTopoCabecalho" src="_imagens/icon/icon_interrogacao.png" 
                                     alt="icon_interrogacao"/></a></p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xg-1" style="border-left: 1px solid #231f20; border-right: 1px solid #231f20;">
                        <p class="text-center">
                            <a href="#" target="_parent"> Baixar gabaritos 
                                <img id="icon_interrogacao" class="iconTopoCabecalho" src="_imagens/icon/icon_report.png" alt="icon_interrogacao"/>
                            </a></p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xg-1">
                        <p class="text-center">
                            <?php
                            if (!empty($_SESSION['cliente'])) {
                                echo "Bem vindo " . $_SESSION['cliente']->nome . ". ";
                                echo "<a href='sair.php'>Sair</a>";
                            } else {
                                ?>
                                Olá <a href="login.php" style="color: #27cbc0;">Entre</a> ou <a href="#" style="color: #27cbc0;">Cadastre-se</a>
                            <?php }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--CABEÇALHO-->
            <div id="div_cabecalho" class="row no-gutters">
                <!--LOGO E BOTÃO-->
                <div class="col-md-4">
                    <!--LOGO CABECALHO-->
                    <a href="index.php">
                        <img id="icone" src="_imagens/logo.png" alt="Logo"/>
                    </a>

                    <!-- MODAL PRODUTOS-->
                    <a id="a_todos_os_produtos" href="#"  data-toggle="modal" data-target="#exampleModal" 
                       style="font-family: 'Open Sans', sans-serif;">
                        <img id="icone" class="icon" src="_imagens/icon/menu.png" alt="icon_menu" style="width: 16px;
                             left: 0px; top: -1px;"/>
                        Todos os produtos
                    </a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true" style="font-family: 'Courgette', cursive;">
                        <div class="modal-dialog" role="document" style="margin: 0px 0px 0px 0px;">
                            <div class="modal-content" style="background-color: white; width: 400px;" >
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Todos as categorias</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <?php foreach ($categoria->findAllOrder() as $key => $value) { ?>
                                            <li><a href="produtos.php?idCategoria=<?php echo $value->id; ?>"><?php echo $value->nome; ?></a></li>
                                        <?php }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--MENU PRINCIPAL-->
                <div class="col-md-6"
                     <!--MENU PRINCIPAL-->
                     <nav id="menu" style="font-family: 'Open Sans', sans-serif;">﻿
                        <h1>Menu Principal</h1>
                        <ul>
                            <li><a href="#" target="_parent">Orçamento <br/> Personalisado</a></li>
                            <li><a href="#" target="_parent">Seja um <br/> Afiliado</a></li>
                            <li><a href="#" target="_parent">Pesquisa de <br/> Satisfação</a></li>
                        </ul>
                    </nav>
                </div>
                <script>
                    // Função que verifica se o navegador tem suporte AJAX 
                    function AjaxF() {
                        var ajax;

                        try {
                            ajax = new XMLHttpRequest();
                        } catch (e) {
                            try {
                                ajax = new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (e) {
                                try {
                                    ajax = new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (e) {
                                    alert("Seu browser não da suporte à AJAX!");
                                    return false;
                                }
                            }
                        }
                        return ajax;
                    }

                    // Função que faz as requisição Ajax ao arquivo PHP
                    function AlteraConteudo() {
                        var ajax = AjaxF();

                        ajax.onreadystatechange = function () {
                            if (ajax.readyState === 4) {
                                document.getElementById('div_carrinho_de_compras').innerHTML = ajax.responseText;
                            }
                        }

                        ajax.open(false, "utils/util_carrinho.php", true);
                        //ajax.open(false, "http://localhost/promo/produtos.php?idCategoria=60", true);
                        ajax.setRequestHeader("Content-Type", "text/html");
                        ajax.send();
                    }
                </script>
                <!--CARRINHO DE COMPRAS-->
                <div id="div_carrinho_de_compras" class="col-md-2"><!--Carrinhod de compras-->
                    <?php include"./utils/util_carrinho.php"; ?>
                </div>
            </div>
        </header>
        <div style="height: 100px;"></div><!--Importante para utilização do cabeçalho fixo-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>