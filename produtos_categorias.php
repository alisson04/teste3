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
        include './_model/Categoria.php';
        include"./modelos/header.php";
        ?>
        <?php
        include './_model/Produto.php';
        $produto = new Produto();
        $categoria = new Categoria();

        if (isset($_POST['cadastrar'])):
            $obj = new Produto();
            $obj->setNome($_POST['tNome']);
            $obj->setTamanho($_POST['tTamanho']);
            $obj->setCor($_POST['tCor']);
            $obj->setMaterial($_POST['tMaterial']);
            $obj->setPreco($_POST['tPreco']);
            $obj->setIdCategoriaFk($_POST['tCategoria']);
            $obj->insert();
        endif;

        if (isset($_POST['cadastrarCategoria'])):
            $obj = new Categoria();
            $obj->setNome($_POST['tNomeCategoria']);
            $obj->setTamanhos($_POST['tTamanhoCategoria']);
            $obj->setCores($_POST['tCorCategoria']);
            $obj->setMateriais($_POST['tMaterialCategoria']);
            $obj->setPrecos($_POST['tPrecoCategoria']);
            $obj->insert();
        endif;
        ?>
        <div id="divCrudProdutos" class="container-fluid" style="padding: 10px 10px;">
            <div class="row no-gutters">
                <div class="col">
                    <!--CADASTRA CATEGORIA------------------------------------->
                    <form method = "post" id = "fCategoria" style="border: 1px solid black; padding: 10px 10px;" >
                        <fieldset id = "categoria" >
                            <legend>Cadastro de Categorias</legend>
                            <label for="cNomeCategoria">Nome:</label>
                            <input id="cNomeCategoria" name="tNomeCategoria" type="text" size="50" class="form-control input-normal" maxlength="50" 
                                   placeholder = "Nome da categoria" required/>
                            <label for="cTamanhoCategoria">Tamanhos:</label>
                            <input id="cTamanhoCategoria" type="text" name="tTamanhoCategoria" class="form-control input-normal" maxlength="100" 
                                   placeholder="Tamanho" required/>

                            <label for="cCorCategoria">Cores:</label>
                            <input id="cCorCategoria" name="tCorCategoria" type="text" class="form-control input-normal" maxlength="100" 
                                   placeholder="Cor" required/> 

                            <label for="cMaterialCategoria">Materiais:</label>
                            <input id="cMaterialCategoria" name="tMaterialCategoria" type="text" class="form-control input-normal" 
                                   maxlength="100" placeholder="Material" required/>

                            <label for="cPrecoCategoria">Preços:</label>
                            <input id="cPrecoCategoria" name="tPrecoCategoria" type="text" class="form-control input-normal" maxlength="100" 
                                   placeholder="Preço" required/>
                            <input name="cadastrarCategoria" type="submit" value="Cadastrar">
                        </fieldset>
                    </form>
                </div>

                <div class="col" style="padding: 0px 20px;">
                    <!--CADASTRA PRODUTO--------------------------------------->
                    <form method = "post">
                        <legend>Cadastro de Produtos</legend>
                        <label for="cCategoria">Categoria:</label><!--Seleciona a categoria-->
                        <select class="custom-select" id="cCategoria" name="tCategoriaP" required onchange="this.form.submit()"
                                class="form-control input-normal"> 
                            <option value="">Selecione a categoria</option>
                            <?php foreach ($categoria->findAllOrder() as $key => $value) { ?>
                                <option  value="<?php echo $value->id; ?>"><?php echo $value->nome; ?></option>                                    
                                <?php
                            }
                            ?>
                        </select>
                    </form>
                    <form class="was-validated" method = "post" id = "fContato" style="border: 1px solid black; padding: 10px 10px;" >
                        <fieldset id="usuario" style="margin-bottom: 50px;">

                            <label for="cNome">Nome:</label><!--Seleciona o nome-->
                            <input type = "text" name = "tNome" id = "cNome" class="form-control input-normal" maxlength = "100" 
                                   placeholder = "Nome do produto" required>

                            <?php
                            if (isset($_POST['tCategoriaP'])):
                                $idCategoria = ($_POST['tCategoriaP']);
                                $stdObj = $categoria->findById($idCategoria);
                                ?>
                                <input type = "text" name = "tCategoria" id = "cCategoria"  
                                       hidden value=" <?php echo $idCategoria; ?>">

                                <label for="cMaterial">Material:</label><!--Seleciona o material-->
                                <select class="custom-select form-control" id="cMaterial" name="tMaterial" required>
                                    <?php
                                    $materiais = explode(';', $stdObj->materiais);

                                    foreach ($materiais as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value; ?>">
                                            <?php echo $value; ?></option>
                                    <?php }
                                    ?>
                                </select>

                                <label for="cCor">Cor:</label><!--Seleciona a cor-->
                                <select class="custom-select form-control" id="cCor" name="tCor" required>
                                    <?php
                                    $cores = explode(';', $stdObj->cores);

                                    foreach ($cores as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value; ?>">
                                            <?php echo $value; ?></option>
                                    <?php }
                                    ?>
                                </select>

                                <label for="cTamanho">Tamanho:</label><!--Seleciona o tamanho-->
                                <select class="custom-select form-control" id="cTamanho" name="tTamanho" required>
                                    <?php
                                    $tamanhos = explode(';', $stdObj->tamanhos);

                                    foreach ($tamanhos as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value; ?>">
                                            <?php echo $value; ?></option>
                                    <?php }
                                    ?>
                                </select>

                                <label for="cPreco">Preço:</label><!--Seleciona o preço-->
                                <select class="custom-select form-control" id="cPreco" name="tPreco" required>
                                    <?php
                                    $precos = explode(';', $stdObj->precos);

                                    foreach ($precos as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value; ?>">
                                            <?php echo $value; ?></option>
                                    <?php }
                                    ?>
                                </select>

                                <input name="cadastrar" type="submit" value="Cadastrar">
                            <?php endif; ?>
                        </fieldset>
                    </form>
                </div>
                <div class="col">
                    <table id="listaProdutos" border="1">
                        <tr style="background-color: #DCDCDC">
                            <td>Nome</td>
                            <td>Tamanho</td>
                            <td>Cor</td>
                            <td>Material</td>
                            <td>Preço</td>
                            <td>Status</td>
                            <?php foreach ($produto->findAllOrder() as $key => $value) { ?>
                            <tr>
                                <td><?php echo $value->nome; ?></td>
                                <td><?php echo $value->tamanho; ?></td>
                                <td><?php echo $value->cor; ?></td>
                                <td><?php echo $value->material; ?></td>
                                <td><?php echo $value->preco; ?></td>
                                <td><?php echo $value->status; ?></td>
                            </tr>
                        <?php }
                        ?>
                        </tr>
                    </table>
                </div>
            </div>
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
