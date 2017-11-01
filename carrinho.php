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
                </tr>

                <?php foreach ($_SESSION['carrinho'] as $key => $value) { ?>
                    <tr>
                        <?php $stdObj = $produto->findById($key) ?>
                        <td><?php echo $stdObj->nome; ?></td>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $value; ?></td>
                        <td><?php echo "R$ ".$key; ?></td>
                        <td><?php echo "R$ ".$key; ?></td>
                        
                        <td>
                            <form name="excluir" action="BDexcluir.php" method="POST">
                                <input type="hidden" name="excluirItemCarrinho" value=<?= $stdObj->id ?> />
                                <input type="image" src="_imagens/delete.png" name="editar" name="editar"style="height: 36px; width: 36px;"  />
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

        <?php
        /*if (isset($_POST['btnLimparCarrinho'])):
            if (!empty($_SESSION['carrinho'])) {
                unset($_SESSION['carrinho']);
            }
                                echo "<a href='sair.php'>Sair</a>";
        endif;

        */
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
