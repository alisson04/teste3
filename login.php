<?php
session_start();
if (!empty($_SESSION['cliente'])) {
    header("Location: administrativo.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
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
        <div class="row no-gutters justify-content-md-center">

            <h2>Área restrita</h2>

            <div class="w-100"></div>
            <div class="col-6">
                <h4>Login</h4>
                <form method="POST" action="valida.php">
                    <label>Usuário</label>
                    <input type="text" name="usuario" placeholder="Digite o seu usuário"><br><br>

                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite a sua senha"><br><br>

                    <input type="submit" name="btnLogin" value="Acessar">

                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                </form>
            </div><div class="col-6">
                <?php
                include './_model/Cliente.php';
                if (isset($_POST['btnCadastrarCliente'])):
                    $obj = new Cliente();
                    $obj->setNome($_POST['tNome']);
                    $obj->setEmail($_POST['tEmail']);
                    $obj->setSenha($_POST['tSenha']);
                    $obj->insert();
                endif;
                ?>
                <h4>Cadastrar</h4>
                <form method="POST" action="">
                    <p><label for="cNome">Nome:</label>
                        <input type="text" name ="tNome" id="cNome" size="50" maxlength="50" placeholder="Nome completo" required/>
                    </p>
                    <p><label for="cEmail">E-mail:</label>
                        <input type="email" name ="tEmail" id="cEmail" size="50" maxlength="50" placeholder="exemplo@exemplo.com" required/>
                    </p>
                    <p><label for="cSenha">Senha:</label>
                        <input type="password" name ="tSenha" id="cSenha" size="50" maxlength="50" placeholder="Digite a sua senha" required/>
                    </p>
                    <p><label for="cConfirmeSenha">Senha:</label>
                        <input type="password" name ="tConfirmeSenha" id="cConfirmeSenha" size="50" maxlength="50" placeholder="Digite a sua senha" required/>
                    </p>
                    
                    <div class="g-recaptcha" data-sitekey="6LeZGzYUAAAAAPUS75BaFlztv2whbx6jZkWal9Ty"></div>
                    <input type="submit" name="btnCadastrarCliente" value="Cadastrar">
                </form>
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
        <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    </body>
</html>