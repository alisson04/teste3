
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gráfica PromoImpresso</title>

        <!--logo da pagina-->
        <link rel="shortcut icon" href="_imagens/icon/logo.png" />

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="_css/header_footer.css"/>

        <!--JAVASCRIPT-->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >
    </head>

    <body style="font-family: 'Share Tech Mono', monospace; background-color: #D3D3D3;">
        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        include './_model/Categoria.php';
        include"./modelos/header.php";
        ?>

        <?php
        include './_model/Cliente.php';
        $key = $_GET["key"];

        echo $key;

        $obj = new Cliente();
        $obj = $obj->findByChave($key);
        
        echo 'sadssa'.$obj->getId();
        //if ($obj):
            
        //endif;
        ?>

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
        <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    </body>
</html>
