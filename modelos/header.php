<?php
$categoria = new Categoria();
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
                                     alt="icon_interrogacao"/> </a></p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xg-1" style="border-left: 1px solid #231f20; border-right: 1px solid #231f20;">
                        <p class="text-center">
                            <a href="#" target="_parent"> Baixar gabaritos 
                                <img id="icon_interrogacao" class="iconTopoCabecalho" src="_imagens/icon/icon_report.png" alt="icon_interrogacao"/>
                            </a></p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 col-xg-1">
                        <p class="text-center">
                            Olá <a href="#" style="color: #27cbc0;">Entre</a> ou <a href="#" style="color: #27cbc0;">Cadastre-se</a>
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
                                            <li><a href="#"><?php echo $value->nome; ?></a></li>
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
                <!--CARRINHO DE COMPRAS-->
                <div class="col-md-2"><!--Carrinhod de compras-->
                    <img id="icon_carrinho_de_compras" class="icon" src="_imagens/icon/carrinho_de_compras.png" 
                         onMouseOver="this.src = '_imagens/icon/carrinho_de_comprasVerde.png'"
                         onMouseOut="this.src = '_imagens/icon/carrinho_de_compras.png'" alt="icon_menu" />
                </div>
            </div>
        </header>

        <div style="height: 100px;"></div><!--Importante para utilização do cabeçalho fixo-->
    </body>
</html>