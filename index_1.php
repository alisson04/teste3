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
        include './_model/Produto.php';
        include './modelos/header.php';
        ?>

        <style type="text/css">
            .notify {
                position: fixed;
                z - index: 99999999;
                width: 220px;
                left: 80%;
            }
            .notify.alert{
                box - shadow: 0px 2px 5px - 1px #000;
                display: none;
            }
        </style>

        <script>
            function teste() {
                var message = ['uno', 'alert-info', 'Attualmente ci sono <strong>444</strong> utenti online.'];
                $('.notify').append('<div id="' + message[0] + '" class="alert ' + message[1] + ' notify2"><button type="button" class="close">×</button>' + message[2] + '</div>');
                $('#' + message[0]).delay(25).fadeIn("slow");
                $('#' + message[0]).delay(25).fadeOut("slow");

                $(document).on('click', '.close', function () {
                    $(this).parent().hide();
                });
            }

            /**$(document).ready(function () {
             var messages = [
             [ 'uno', 'alert-info','Attualmente ci sono <strong>444</strong> utenti online.'],
             [ 'due',    'alert-success',  'Un utente sta visionando la pagina Bambini' ],
             [ 'tre',  'alert-warning',  'Un utente sta visionando ...' ],
             [ 'qattro',  'alert-danger',   'Una richieste è stata appena inviata' ],
             [ 'cinque', 'alert-info','Attualmente ci sono <strong>444</strong> utenti online.'],
             [ 'sei',    'alert-success',  'Un utente sta visionando la pagina Bambini' ],
             [ 'sette',  'alert-warning',  'Un utente sta visionando ...' ],
             [ 'otto',  'alert-danger',   'Una richieste è stata appena inviata' ]
             
             ];
             for(i=0;i<messages.length;i++){
             var message = messages[Math.floor(Math.random() * messages.length)];
             $('.notify').append('<div id="'+message[0]+'" class="alert '+message[1]+' notify2"><button type="button" class="close">×</button>'+message[2]+'</div>');
             $('#'+message[0]).delay(Math.floor(Math.random() * 10000) + 2500).fadeIn( "slow");
             $('#'+message[0]).delay(Math.floor(Math.random() * 2500) + 2500).fadeOut( "slow");
             }
             $(document).on('click', '.close', function () {$(this).parent().hide();});
             });*/
        </script>

        <div class="container">
            <div class="row">
                <div class="notify"></div>

            </div>

            <button onclick="teste()">teste</button>

        </div>

        <!--FOOTER////////////////////////////////////////////////////////-->
        <?php
        $footer = "index";
        include"./modelos/footer.php";
        ?>
    </body>
</html>