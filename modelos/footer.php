<!DOCTYPE html>
<html>
    <head>
        <title>Footer</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="_css/footer.css"/>

        <!--fonte Google-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
        <footer id="rodape">
            <div style="background-color: #27cbc0; height: 250px; color: white;">
                <h1>Inscreva-se em nossa newsletter</h1>
                <h6>quer ficar por dentro das nossas notícias exclusivas, receber descontos e mais?</h6>
                <form method="post" id="fContato">
                    <p><label for="cEmail">E-mail:</label>
                        <input type="email" name="tEmail" id="cEmail" size="20" maxlength="40" placeholder="@gmail.com" />
                    </p>

                    <button type="button" class="btn btn-lg botao_color_0a9b91" style="font-weight: bold;">CONFIRA</button>
                </form>

                <p style="text-align: left" >ACOMPANHE-NOS<br/></p>
                <ul id="social_links">
                    <li>
                        <a href="https://www.facebook.com/promoimpresso/" target="_blank">
                            <img src="_imagens/icon/icon_face.png" alt="Facebook"/></a>
                    </li>
                    <li>
                        <a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                            <img src="_imagens/icon/icon_link.png" alt="Linkedin"/></a>
                    </li>
                </ul>
            </div>
            <div style="font-family: 'Open Sans', sans-serif; height: 200px; background-color: #0a9b91">
                <div class="row no-gutters justify-content-start">
                    <div class="col-4">
                        <img id="icone" src="_imagens/logo_nome_branco.png" alt="Logo"/>
                    </div>
                    <div class="col-4">
                        <p>&copy; 2017 - PromoImpresso. Todos os direitos reservados<br/></p>
                    </div>
                </div>
            </div>
            <!--TERCEIRO FOOTER-->
            <div style="background-color: white; height: 100px; padding-top: 20px; ">
                <div class="row no-gutters">
                    <!--FORMAS DE PAGAMENTO-->
                    <div class="col" style="position:relative;">
                        <p style="color: #77787b;">FORMAS DE PAGAMENTO</p>
                        <div class="row justify-content-md-center">
                            <ul id="formas_de_pagamento">
                                <li><img src="_imagens/_formas_pagamento/itau.png" alt="Facebook"/></li>
                                <li><img src="_imagens/_formas_pagamento/visa.png" alt="Facebook"/></li>
                                <li><img src="_imagens/_formas_pagamento/masterCard.png" alt="Facebook"/></li>
                                <li><img src="_imagens/_formas_pagamento/elo.png" alt="Facebook"/></li>
                                <li><img src="_imagens/_formas_pagamento/americanExpress.png" alt="Facebook"/></li>
                                <li><img src="_imagens/_formas_pagamento/boleto.png" alt="Facebook"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <p style="color: #77787b;">CERTIFICADOS</p>
                        <div class="botoes_ocultos"><!--Botões ocultos-->
                            <button type="button" class="btn btn-lg botao_color_e47650">CONFIRA</button>
                        </div>
                    </div>
                    <div class="col">
                        <p style="color: #77787b;">CNPJ:</p>
                    </div>
                </div>
            </div>
            <div style="background-color: #ebebeb; height: 30px;">
            </div>
        </footer>
    </body>
</html>