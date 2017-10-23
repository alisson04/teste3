<?php
include '_controller/ProdutoController.php';
include './_model/Categoria.php';
$produtoController = new PodutoController();

if (isset($_POST['cadastrar'])):
    $produto = array('nome' => $_POST['tNome'],
        'tamanho' => $_POST['tTamanho'],
        'cor' => $_POST['tCor'],
        'papel' => $_POST['tPapel']);
    $produtoController->insert($produto);
endif;

if (isset($_POST['cadastrarCategoria'])):
    $cat = new Categoria();
    $cat->setNome($_POST['tNomeCategoria']);
    $cat->insert();
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

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta/css/bootstrap.css" >

        <!--Fontes Gogle-->
    </head>

    <body style="font-family: 'Share Tech Mono', monospace; margin: 0px 0px 0px 0px; background-color: #D3D3D3;">
        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        $pagina = "index";
        include"./modelos/header.php";
        ?>
        <div id="divCrudProdutos" class="container" style="padding: 10px 10px;">
            <form method = "post" id = "fCategoria" style="border: 1px solid black; padding: 10px 10px;" >
                <fieldset id = "categoria" >
                    <legend>Cadastro de Categorias</legend>
                    <p><label for = "cNomeCategoria">Nome:</label>
                        <input type = "text" name = "tNomeCategoria" id = "cNomeCategoria" size="50" maxlength = "50" 
                               placeholder = "Nome da categoria" required/>
                    </p>
                    <input name="cadastrarCategoria" type="submit" value="Cadastrar">
                </fieldset>
            </form>

            <form class="was-validated" method = "post" id = "fContato" style="border: 1px solid black; padding: 10px 10px;" >
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

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
