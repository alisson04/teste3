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
        <link rel="stylesheet" type="text/css" href="_css/header_footer.css"/>

        <!--JAVASCRIPT-->
        <script language="javascript" src="_javascript/carrinho.js" ></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >
    </head>

    <body style="font-family: 'Share Tech Mono', monospace; background-color: #D3D3D3;">
        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        include './_model/Categoria.php';
        include './_model/Produto.php';
        include"./modelos/header.php";

        $produto = new Produto(); //Necessário para listar as categorias de produtos
        ?>

        <table border="1">
            <?php if (!empty($_SESSION['carrinho'])) { ?>
                <caption>Carrinho de compras</caption>
                <tr style="background-color: #DCDCDC">
                    <td>Produto</td>
                    <td>Descrição</td>
                    <td>Quantidade</td>
                    <td>Preço unitário</td>
                    <td>Total</td>
                    <td>Remover item</td>
                </tr>

                <?php
                foreach ($_SESSION['carrinho'] as $key => $value) {
                    //IDs e NAMES relativos para mandar por método java script
                    $idIn = "cInQuantidade";
                    $idOut = "cOutQuanti";
                    $idTotal = "cTotalProduto";
                    $idIn = $idIn . $key;
                    $idOut = $idOut . $key;
                    $idTotal = $idTotal . $key
                    ?>

                    <?php $stdObj = $produto->findById($key) ?>
                    <tr>
                        <td><?php echo $stdObj->nome; ?></td>
                        <td><?php echo "Descrição..." ?></td>
                        <td>
                            <input id="<?php echo $idIn; ?>" name="tQuantidade" type="number" size="5" maxlength="5" value="1" min="1" required
                                   oninput="quanti('<?php echo $idIn; ?>', '<?php echo $idOut; ?>'); 
                                   calc_total('<?php echo $idIn; ?>', <?php echo $stdObj->preco; ?>, '<?php echo $idTotal; ?>');"/>
                            <input id="<?php echo $idOut; ?>" name="tQuanti" style="border: none;" type="text" value="" readonly/>
                        </td>
                        <td><?php echo $stdObj->preco; ?></td>
                        <td>
                            <input id="<?php echo $idTotal; ?>" class="text-center" type="text" name="tTotalProduto" value="<?php echo $stdObj->preco; ?>" readonly/>
                        </td>
                        <td>
                            <form name="excluir" action="utils/carrinhoDel.php" method="POST">
                                <input type="hidden" name="excluirItemCarrinho" value=<?= $stdObj->id ?> />
                                <input type="image" src="_imagens/icon/remove.png" name="editar" name="editar"style="height: 36px; width: 36px;"  />
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

        <form method="POST" action="utils/limparCarrinho.php">
            <input type="submit"  name="btnLimparCarrinho" value="Limpar carrinho"
                   class="btn botao_color_e47650">
        </form>
        <button type="button" class="btn btn-outline-primary" ><a href="formas_pagamento.php">Finalizar compra</a></button>
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
