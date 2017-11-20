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
        <link rel="stylesheet" type="text/css" href="_css/carrinho.css"/>

        <!--JAVASCRIPT-->
        <script language="javascript" src="_javascript/carrinho.js" ></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >
    </head>

    <body style="font-family: 'Share Tech Mono', monospace; background-color: #ebebeb;">
        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        require_once './modelos/header.php';
        $categoria = new Categoria(); //Necessário para listar as categorias de produtos



        $totalVenda = 0;
        foreach ($_SESSION['carrinho'] as $key => $value) {
            $v = preg_replace("/[^0-9.]/", "", $value['total']);
            $v = (float) $v;
            $totalVenda += $v;
            echo $v;
        }
        echo $totalVenda;
        ?>

        <p id="status"> </p>
        <div id="div_produtos" class="row no-gutters" style="margin-top: 30px; margin-bottom: 30px; margin-left: 10%; margin-right: 20%;">
            <?php include"util_carrinho_produtos.php"; ?>
        </div>

        <div class="row align-items-center" style="margin-top: 30px; margin-bottom: 30px; margin-left: 10%; margin-right: 20%;">
            <!--CUPOM DE DESCONTO----->
            <div class="col" style="background-color: #ffffff; padding: 20px 20px; margin-right: 30px; height: 150px;">
                <h6 style="font-weight: bold;">Cupom de desconto</h6>
                <div class="row no-gutters">
                    <div class="col-9">
                        <input id="" type="text" style="border: 1px solid #cccccc; background:#e1e1e1; width:100%; height:50px; padding-left: 10%;"
                               placeholder="Adicionar código"/>
                    </div>
                    <div class="col-3">
                        <div style="display: table;  height:50px;">
                            <div style="display: table-cell; vertical-align: middle;">
                                <a href="formas_pagamento.php"  class="links">Validar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--TOTAL DA COMPRA----->
            <div class="col" style="background-color: #ffffff; height: 150px;">
                <div style="display: table;  height:150px; width: 100%;">
                    <div style="display: table-cell; vertical-align: middle; text-align: right;">
                        <h6 style="display: inline; ">TOTAL</h6>
                        <input id="c_total_venda" class="text-center" type="text" name="tTotalProduto"
                               value="somaTotalVenda('<?php echo $totalVenda; ?>')" readonly style="border: none; display: inline;"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center" style="margin-top: 30px; margin-bottom: 30px; margin-left: 10%; margin-right: 20%;">
            <div class="col-6" style="padding-left: 0px;">
                <!--BAIXAR ORÇAMENTO-------->
                <button type="button" class=" btn-preto-branco" <?php echo empty($_SESSION['carrinho']) ? 'hidden' : ''; ?> >
                    <i class="fa fa-file-o" aria-hidden="true"></i> BAIXAR ORÇAMENTO
                </button>
            </div>

            <div class="col-3">
                <a href="#" style="color: #58595b;" class="links">Continuar comprando</a>
            </div>

            <div class="col-3">
                <!--FINALIZAR COMPRA-------->
                <div class="row justify-content-md-end">
                    <button type="button" class="btn-verde-claro" <?php echo empty($_SESSION['carrinho']) ? 'hidden' : ''; ?>>
                        Finalizar compra
                    </button>

                </div>
            </div>

            <div class="col-6" style="padding-left: 0px;">

            </div>
        </div>

        <!--LIMPAR CARRINHO-------->
        <a href="utils/limparCarrinho.php" >Limpar carrinho<i class="fa fa-arrow-right" aria-hidden="true"></i></a>

        <!--FOOTER////////////////////////////////////////////////////////-->
        <?php
        $footer = "index";
        include"./modelos/footer.php";
        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
        <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    </body>
</html>
