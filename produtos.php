<?php
include '_controller/ProdutoController.php';
$produtoController = new PodutoController();

if (isset($_POST['cadastrar'])):
    $produto = array('nome' => $_POST['tNome'],
        'tamanho' => $_POST['tTamanho'],
        'cor' => $_POST['tCor'],
        'papel' => $_POST['tPapel']);
    $produtoController->insert($produto);
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Produtos</title>

        <!--logo da pagina-->
        <link rel="shortcut icon" href="_imagens/icon/logo.png" />

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="_css/crudProdutos.css"/>

        <!--JAVASCRIPT-->

        <!--Fontes Gogle-->
    </head>

    <body style="font-family: 'Share Tech Mono', monospace; margin: 0px 0px 0px 0px; background-color: #D3D3D3;">
        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        $pagina = "index";
        include"./modelos/header.php";
        ?>
        <div id="divCrudProdutos" class="container">
            <form method = "post" id = "fContato" >
                <fieldset id = "usuario" style="margin-bottom: 50px; " >
                    <legend>Cadastro de produtos</legend>
                    <p><label for = "cNome">Nome:</label>
                        <input type = "text" name = "tNome" id = "cNome" size="50" maxlength = "20" placeholder = "Nome do produto" required/>
                    </p>
                    <p><label for = "tTamanho">Tamanho:</label>
                        <select class="custom-select" id="tTamanho" name="tTamanho" required>
                            <option  value="">Selecione o tamanho</option>
                                <option value="0,30 X 0,50">0,30 X 0,50</option>
                                <option value="0,40 X 0,60">0,40 X 0,60</option>
                                <option value="0,70 X 1,00">0,70 X 1,00</option>
                        </select>
                    </p>
                    <p><label for = "tCor">Cor:</label>
                        <select class="custom-select" id="tCor" name="tCor" required>
                            <option value="">Selecione a cor</option>
                            <option value="1 X 0">1 X 0</option>
                            <option value="1 X 1">1 X 1</option>
                            <option value="4 X 0">4 X 0</option>
                            <option value="4 X 4">4 X 4</option>
                        </select>
                    </p>
                    <p><label for = "tPapel">Papel:</label>
                        <select class="custom-select" id="cTelefone" name="tPapel" required>
                            <option value="">Selecione o papel</option>
                            <option value="Couche">Couche</option>
                            <option value="Offset">Offset</option>
                        </select>
                    </p>
                    <input name="cadastrar" type="submit" value="Cadastrar">
                </fieldset>
            </form>

            <table id="listaProdutos" border="1">
                <caption>Produtos no sistema</caption>
                <tr style="background-color: #DCDCDC">
                    <td>Nome</td>
                    <td>Tamanho</td>
                    <td>Cor</td>
                    <td>Papel</td>
                    <?php foreach ($produtoController->findAllOrderByGenerico() as $key => $value) { ?>
                    <tr>
                        <td><?php echo $value->nome; ?></td>
                        <td><?php echo $value->tamanho; ?></td>
                        <td><?php echo $value->cor; ?></td>
                        <td><?php echo $value->papel; ?></td>
                    </tr>
                <?php }
                ?>
                </tr>
            </table>
        </div>
        <!--FOOTER////////////////////////////////////////////////////////-->
        <?php
        $footer = "index";
        include"./modelos/footer.php";
        ?>
    </body>
</html>
