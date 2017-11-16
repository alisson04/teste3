<!DOCTYPE html>
<html>
    <head>
 <title>Testes do Blog</title>
        <script>
            // Função que verifica se o navegador tem suporte AJAX 
            function AjaxF()
            {
                var ajax;

                try
                {
                    ajax = new XMLHttpRequest();
                } catch (e)
                {
                    try
                    {
                        ajax = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e)
                    {
                        try
                        {
                            ajax = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e)
                        {
                            alert("Seu browser não da suporte à AJAX!");
                            return false;
                        }
                    }
                }
                return ajax;
            }

            // Função que faz as requisição Ajax ao arquivo PHP
            function AlteraConteudo()
            {
                var ajax = AjaxF();

                ajax.onreadystatechange = function () {
                    if (ajax.readyState === 4)
                    {
                        document.getElementById('conteudo').innerHTML = ajax.responseText;
                    }
                }

                // Variável com os dados que serão enviados ao PHP
                var dados = "nome=" + document.getElementById('txtnome').value;

                ajax.open("GET", "retorna_informacoes.php?" + dados, true);
                ajax.setRequestHeader("Content-Type", "text/html");
                ajax.send();
            }
        </script>
    </head>
    <body>
        <!--HEADER///////////////////////////////////////////////////////////-->
        <?php
        include './_model/Categoria.php';
        include"./modelos/header.php";

        $categoria = new Categoria(); //Necessário para listar as categorias de produtos
        ?>
 Digite seu Nome:
 <input id="txtnome" name="txtnome" type="text" />
 <br/>
 <button onclick="AlteraConteudo()">Enviar Nome</button>
 <br />

 <div id="conteudo">
  Olá anônimo, seja bem-vindo!!!
 </div>
    </body>
</html>
