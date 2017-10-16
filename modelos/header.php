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

        <script>

            window.closeModal = function () {
                $('#exampleModal').modal('show');
            };

        </script>

    </head>

    <body style="margin: 0px 0px 0px 0px;">

        <a href="#" onclick="closeModal();" style="padding-top:10px;" target="_parent">Obah posso comentar</a>
        <header id="cabecalho">
            <!--LOGO CABECALHO-->
            <img id="icone" src="_imagens/logoNome.png" alt="Logo"/>

            <!--MENU PRINCIPAL-->
            <nav id="menu" onmouseout="mudaFoto('../_imagens/logo.png')" style="font-family: 'Open Sans', sans-serif;">﻿
                <h1>Menu Principal</h1>
                <ul>
                    <li><a href="index.php" target="_parent">Home</a></li>
                    <li><a href="sobre-nos.html" target="_parent">Sobre nós</a></li>
                    <li><a href="fale-conosco.html" target="_parent">Fale conosco</a></li>
                </ul>
            </nav>
        </header>

        <!-- Modal -->
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
                    <div class="modal-body" style="height: 1000px">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <!--poper.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"  crossorigin="anonymous"></script>
        <!-- Bootstrap JavaScript -->
        <script src="../bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>