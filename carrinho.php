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
          include './_model/Categoria.php';
          include"./modelos/header.php";

          $categoria = new Categoria(); //Necessário para listar as categorias de produtos
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
                        $idTotal = $idTotal . $key;
                        ?>

                        <?php
                        var_dump($value);
                        $stdObj = $categoria->findById($value['id']); //Pega a categoria do produto no banco
                        $imagens = explode(";", $stdObj->imagens); //Pega a imagem do produto para exibir
                        ?>

                        <tr style="background-color: #ffffff; border-top: 10px solid #e1e1e1;">
                            <td class="tabelaDados">
                                <img src=" <?php echo $imagens[0]; ?>" alt="First slide" style="width: 150px; height: 150px;"></td>

                            <td class="tabelaDados">
                                <?php echo $stdObj->nome ?><br/>
                                <?php echo "Dimensão: " . $value['tamanho']; ?><br/>
                                <?php echo "Quantidade: " . $value['quantidade']; ?><br/>
                                <?php echo "Cor: " . $value['cor']; ?><br/>
                                <?php echo "Material: " . $value['material']; ?><br/>
                            </td>

                            <td class="tabelaDados"><?php echo "R$ " . $value['preco']; ?></td>

                            <td class="tabelaDados" style="text-align: right;">
                                <input id="<?php echo $idTotal; ?>" class="text-center" type="text" name="tTotalProduto" 
                                       value="<?php echo "R$ " . $value['preco']; ?>" readonly style="border: none;" />

                                <form  id="formRemoveItem" name="excluir" action="utils/carrinhoDel.php" method="POST">
                                    <input type="hidden" name="excluirItemCarrinho" value=<?= $value['id']; ?> />
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
        <button type="button" class="btn btn-outline-primary" <?php echo empty($_SESSION['carrinho']) ? 'hidden' : ''; ?>>
            <a href="formas_pagamento.php" >
                Finalizar compra<i class="fa fa-arrow-right" aria-hidden="true"></i>
                <input id="c_total_venda" class="text-center" type="number" name="tTotalProduto" 
                       value="2" readonly style="border: none;"/>
            </a>
        </button>


        <a href="utils/limparCarrinho.php" >
            Limpar carrinho<i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>

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
