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

    <body style="font-family: 'Share Tech Mono', monospace; background-color: #ebebeb;" window"nome do método"();>
          <!--HEADER///////////////////////////////////////////////////////////-->
          <?php
          include './_model/Categoria.php';
          include './_model/Produto.php';
          include"./modelos/header.php";

          $produto = new Produto(); //Necessário para listar as categorias de produtos
          ?>

          <div class="row no-gutters" style="margin-top: 30px; margin-bottom: 30px; margin-left: 10%; margin-right: 20%;">
            <table border="0">
                <?php if (!empty($_SESSION['carrinho'])) { ?>
                    <tr style="background-color: #e1e1e1; text-transform: uppercase; font-weight: bold;">
                        <td>Produto</td>
                        <td>Descrição</td>
                        <td>Preço unitário</td>
                        <td style="text-align: right;">Valor</td>
                    </tr>

                    <?php
                    foreach ($_SESSION['carrinho'] as $key => $value) {
                        //IDs e NAMES relativos para mandar por método java script
                        $idIn = "cInQuantidade";
                        $idTotal = "cTotalProduto";
                        $idIn = $idIn . $key;
                        $idTotal = $idTotal . $key
                        ?>

                        <?php $stdObj = $produto->findById($key) ?>
                        <tr style="background-color: #ffffff; border-top: 10px solid #e1e1e1;">
                            <td class="tabelaDados">
                                <img src="_imagens/produtos/cartaodevisita.png" alt="First slide" style="width: 150px; height: 150px;">
                                <?php echo $stdObj->nome . "Descrição... ..... .....  . ..  . . .. " ?></td>
                            <td class="tabelaDados">
                                <input id="<?php echo $idIn; ?>" name="tQuantidade" type="number" size="5" maxlength="5" value="1" min="1" required
                                       oninput="calc_total_qunti('<?php echo $idIn; ?>', <?php echo $stdObj->preco; ?>, '<?php echo $idTotal; ?>');"
                                       style="border: none;"/>
                            </td>
                            <td class="tabelaDados"><?php echo "R$ " . $stdObj->preco; ?></td>
                            <td class="tabelaDados" style="text-align: right;">
                                <input id="<?php echo $idTotal; ?>" class="text-center" type="text" name="tTotalProduto" 
                                       value="<?php echo "R$ " . $stdObj->preco; ?>" readonly style="border: none;" />

                                <form  id="formRemoveItem" name="excluir" action="utils/carrinhoDel.php" method="POST">
                                    <input type="hidden" name="excluirItemCarrinho" value=<?= $stdObj->id ?> />
                                    <a href="#" onclick="document.getElementById('formRemoveItem').submit();" style="color: #ed1a3b">
                                        <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i> Excluir</a>
                                </form>
                            </td>
                        </tr>


                        <?php
                    }
                } else {
                    echo 'Carrinho Vazio';
                }
                ?>
            </table>
        </div>

        <div class="row align-items-center" style="margin-top: 30px; margin-bottom: 30px; margin-left: 10%; margin-right: 20%;">
            <div class="col" style="background-color: #ffffff; padding: 50px 0px 50px 0px; margin-right: 30px;">
                <!--<form method="POST" action="utils/limparCarrinho.php">
                    <input type="submit"  name="btnLimparCarrinho" value="Limpar carrinho"
                           class="btn botao_color_e47650"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                </form>-->
                <h6>Cupom de desconto</h6>
                <input id="" type="text" />
                <span >Validar</span>
            </div>
            <div class="col" style="background-color: #ffffff; padding: 50px 0px 50px 0px;">
                <h6 style="display: inline;">TOTAL</h6>
                <input id="c_total_venda" class="text-center" type="number" name="tTotalProduto" 
                       value="0" readonly style="border: none; display: inline;"/>
            </div>
        </div>
        <button type="button" class="btn btn-outline-primary" <?php echo empty($_SESSION['carrinho']) ? 'hidden' : ''; ?>><a href="formas_pagamento.php" >
                Finalizar compra<i class="fa fa-arrow-right" aria-hidden="true"></i>
                <input id="c_total_venda" class="text-center" type="number" name="tTotalProduto" 
                       value="2" readonly style="border: none;"/>
            </a>
        </button>

        <!--$key == ID; $value == quantidade-->
        <?php foreach ($_SESSION['carrinho'] as $key => $value) { ?>
            <?php $stdObj = $produto->findById($key) ?>
            <script>
                somaTotalVenda('<?php echo $stdObj->preco; ?>', '<?php echo $value; ?>');
            </script>
        <?php } ?>

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
