<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once './_model/Categoria.php';
?>

<script>
    function AlteraConteudoCarrinho() {
        $('#div_produtos').load('util_carrinho_produtos.php');
    }
</script>
<?php if (!empty($_SESSION['carrinho'])) { ?>
    <table border="0" style="width: 100%;">
        <tr style="background-color: #e1e1e1; text-transform: uppercase; font-weight: bold;">
            <td class="tabelaDados" >Produto</td>
            <td class="tabelaDados" >Previsão de entrega</td>
            <td class="tabelaDados" >Quantidade</td>
            <td class="tabelaDados"  style="text-align: right;">Valor</td>
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
            $categoria = new Categoria(); //Necessário para listar as categorias de produtos
            $stdObj = $categoria->findById($value['id']); //Pega a categoria do produto no banco
            $imagens = explode(";", $stdObj->imagens); //Pega a imagem do produto para exibir
            ?>

            <tr style="background-color: #ffffff; border-top: 10px solid #e1e1e1; ">
                <td class="tabelaDados" style="width: 40%">
                    <div class="row" style="padding: 0px 0px; margin: 0px 0px;">
                        <div class="col" style="padding-right: 0px; width: 150px; ">
                            <img src="<?php echo $imagens[0]; ?>" alt="First slide" style="width: 150px; height: 150px;">
                        </div>

                        <div class="col" style="padding-left: 0px; padding-right: 0px;">
                            <?php echo $stdObj->nome ?><br/>
                            <?php echo "Dimensão: " . $value['tamanho']; ?><br/>
                            <?php echo "Cor: " . $value['cor']; ?><br/>
                            <?php echo "Material: " . $value['material']; ?><br/>
                        </div>
                    </div>                    
                </td>

                <!--PREVISÃO DE ENTREGA---------------->
                <td class="tabelaDados">
                </td>
                <!--QUANTIDADE----------->
                <td class="tabelaDados"><?php echo $value['quantidade']; ?></td>

                <td class="tabelaDados" style="text-align: right;">
                    <!--TOTAL---------------->
                    <div class="row no-gutters">
                        <div style="display: table; height: 75px; width: 100%;">
                            <div style="display: table-cell; vertical-align: top;">
                                <input id="<?php echo $idTotal; ?>" class="text-right" type="text" name="tTotalProduto" 
                                       value="<?php echo "R$ " . $value['total']; ?>" readonly style="border: none;" />
                            </div>
                        </div>
                    </div>

                    <!--EXCLUIR---------->
                    <div class="row no-gutters">
                        <div style="display: table; height: 75px;width: 100%;">
                            <div style="display: table-cell; vertical-align: bottom; ">
                                <input id="cExcluirItemCarrinho<?php echo $key; ?>" type="hidden" name="t" value="<?php echo $key; ?>" />
                                <a href="#" onclick="removerDoCarrinho('<?php echo $key; ?>'), AlteraConteudoCarrinho()" style="color: #ed1a3b">
                                    <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i> Excluir</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <img src="_imagens/empty_cart.png" alt="First slide" style="width: 100%; height: 100%;">
    <?php
}
?>