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
            <div id="div_topo_cabecalho" class="row no-gutters" >
                <!--MENU PRINCIPAL-->
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xg-6">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xg-6">
                    <nav id="menuT" style="font-family: 'Open Sans', sans-serif;">﻿
                        <ul>
                            <li id="">
                                <a href="#" target="_parent" style=" text-align: right;">Central de ajuda
                                    <img id="icon_interrogacao" class="icon" 
                                         src="_imagens/icon/icon_interrogacao.png" alt="icon_interrogacao" 
                                         style="width: 16px; left: 0px; top: 0px;"/> </a>
                            </li>
                            <li style="border-left: 1px solid #231f20;"><a href="sobre-nos.html" target="_parent" style=" padding-left: 20px;
                                                                           color: #231f20;"> Baixar gabaritos 
                                    <img id="icon_interrogacao" class="icon" 
                                         src="_imagens/icon/icon_report.png" alt="icon_interrogacao" 
                                         style="width: 16px; left: 0px; top: 0px;"/> </a>
                            </li>
                            <li style="border-left: 1px solid #231f20; padding-left: 20px; color: #27cbc0;">Olá
                                <a href="#"> Entre</a> ou <a href="#" style="color: #27cbc0;">Cadastre-se</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="div_cabecalho" class="row no-gutters">
                <div class="col" style="width: 25%;">
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

                <div class="col" style="width: 30%;">
                    <!--MENU PRINCIPAL-->
                    <nav id="menu" style="font-family: 'Open Sans', sans-serif;">﻿
                        <h1>Menu Principal</h1>
                        <ul>
                            <li><a href="#" target="_parent" onclick="src()">Orçamento <br/> Personalisado</a></li>
                            <li><a href="sobre-nos.html" target="_parent">Seja um <br/> Afiliado</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col" style="width: 45%;"><!--Carrinhod de compras-->
                    <img id="icon_carrinho_de_compras" class="icon" src="_imagens/icon/carrinho_de_compras.jpg" 
                         alt="icon_menu" />
                </div>
            </div>
        </header>

        <div style="height: 100px;"></div>
    </body>
</html>