<!DOCTYPE html>
<html>
    <head>
        <title>adasdasdas</title>
        <meta charset="UTF-8">

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="_css/header.css"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >
        <!--fonte Google-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!--JAVASCRIPT-->
        <script language="javascript" src="_javascript/funcoes.js" ></script>

        <!--window.closeModal = function () {$('#exampleModal').modal('show');};
        <a href="#" onclick="closeModal();" style="padding-top:10px;" target="_parent">Obah posso comentar</a>-->
    </head>

    <body style="margin: 0px 0px 0px 0px;">
        <header id="cabecalho" style="font-family: 'Open Sans', sans-serif;">
            <!--TOPO DO CABEÇALHO-->
            <div id="div_topo_cabecalho" class="row no-gutters">
                <!--MENU PRINCIPAL-->
                <div class="col-6">
                </div>
                <div class="col-6">
                    <nav id="menuT" style="font-family: 'Open Sans', sans-serif;">﻿
                        <ul>
                            <li id="">
                                <a href="produto-cartao-de-visita.html" target="_parent"
                                   style=" text-align: right;">Central de ajuda
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
            <div class="row no-gutters" style="height: 75px;">
                <div class="col" style="width: 25%;">
                    <!--LOGO CABECALHO-->
                    <img id="icone" src="_imagens/logo.png" alt="Logo"/>

                    <!-- MODAL PRODUTOS-->
                    <a id="a_todos_os_produtos" href="#"  data-toggle="modal" data-target="#exampleModal" 
                       style="font-family: 'Open Sans', sans-serif;">
                        <img id="icone" class="icon" src="_imagens/icon/menu.png" alt="icon_menu" style="width: 16px;
                             left: 0px; top: 0px;"/>
                        Todos os produtos
                    </a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
                         aria-hidden="true" style="font-family: 'Courgette', cursive;">
                        <div class="modal-dialog" role="document" style="margin: 0px 0px 0px 0px;">
                            <div class="modal-content" style="background-color: white; width: 400px;" >
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Todos os produtos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="height: 500px">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
                            <li><a href="index.php" target="_parent">Orçamento <br/> Personalisado</a></li>
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

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <!--poper.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"  crossorigin="anonymous"></script>
        <!-- Bootstrap JavaScript -->
        <script src="../bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>