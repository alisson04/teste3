

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!--HEADER///////////////////////////////////////////////////////////-->
    <?php
    include './_model/Categoria.php';
    include"./modelos/header.php";

    $categoria = new Categoria(); //Necessário para listar as categorias de produtos
    ?>

    <script type="text/javascript" language="javascript">
        $(function ($) {
            // Quando o formulário for enviado, essa função é chamada
            $("#formulario").submit(function () {
                // Colocamos os valores de cada campo em uma váriavel para facilitar a manipulação
                var nome = $("#nome").val();
                var email = $("#email").val();
                var mensagem = $("#mensagem").val();
                // Exibe mensagem de carregamento
                $("#status").html("<img src='loader.gif' alt='Enviando' />");
                // Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
                $.post('envia.php', {nome: nome, email: email, mensagem: mensagem}, function (resposta) {
                    // Quando terminada a requisição
                    // Exibe a div status
                    $("#status").slideDown();
                    // Se a resposta é um erro
                    if (resposta != false) {
                        // Exibe o erro na div
                        $("#status").html(resposta);
                    }
                    // Se resposta for false, ou seja, não ocorreu nenhum erro
                    else {
                        // Exibe mensagem de sucesso
                        $("#status").html("Mensagem enviada com sucesso!");
                        // Coloca a mensagem no div de mensagens
                        $("#mensagens").prepend("<strong>" + nome + "</strong> disse: <em>" + mensagem + "</em><br />");
                        // Limpando todos os campos
                        $("#nome").val("");
                        $("#email").val("");
                        $("#mensagem").val("");
                    }
                });
            });
        });
    </script>

    <body>
        <h1>Escrever Mensagem</h1>

        <div id="status" style="display: none;"></div>

        <div id="escrever">
            <form id="formulario" action="javascript:func()" method="post">
                <strong>Nome:</strong> <br />
                <input name="nome" type="text" id="nome" size="35" /> <br /><br />

                <strong>Email:</strong> <br />
                <input name="email" type="text" id="email" size="35" /> <br /><br />

                <strong>Mensagem:</strong>  <br />
                <input name="mensagem" type="text" id="mensagem" size="145" /><br /><br />

                <input type="submit" value="Enviar" />

            </form>
        </div>

        <h1>Mensagens</h1>

        <div id="mensagens"></div>

    </body>
</html>