<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <title>Atualizar DIV de segundos em segundo com PHP/JQuery/AJAX</title>

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script>

            // Quando carregar a página
            $(function () {
                alert("asdasda");
                $('#frase').load('utils/util_carrinho_produtos.php');
            });
        </script>
    </head>

    <body>

        <div class="container">

            <h1>Frases sortidas</h1>

            <div id="frase"></div>

        </div>

    </body>
</html>
