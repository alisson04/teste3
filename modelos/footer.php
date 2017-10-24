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
        <footer id="rodape" style="font-family: 'Open Sans', sans-serif;">
            <!--PRIMEIRO FOOTER-->
            <div id="div_primeiro_footer">
                <div class="container-fluid justify-content-start" >
                    <div class="container space_top_primeiro_footer">
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <h2 class="text-center">Inscreva-se em nosso newsletter</h2>
                                <h6>para ficar por dentro das nossas notícias exclusivas, receber descontos e mais!</h6>
                            </div>
                        </div>
                    </div>
                    <div class="container space_top_primeiro_footer">
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <form method="post">
                                    <?php
                                    require_once './_dao/DaoGenerico.php';
                                    $usuario = new DaoGenerico();

                                    if (isset($_POST['cadastrarNewslatter'])):
                                        $cliente = array(
                                            'email' => $_POST['tEmailNewslatter']
                                        );
                                        $usuario->DBCreate('tbl_newsletter', $cliente);
                                    endif;
                                    ?>
                                    <p style="display:inline-block;"><label for="cEmail">E-mail:</label>
                                        <input type="email" name="tEmailNewslatter" id="cEmail" size="20" maxlength="40" required/>
                                    </p>
                                    <button  name="cadastrarNewslatter" type="submit" class="btn btn-lg botao_color_0a9b91" 
                                             style="font-weight: bold; display:inline-block; margin-left: 10px;">INSCREVER</button>
                                </form>                                
                            </div>
                        </div>  
                    </div>
                    <div class="container space_top_primeiro_footer">
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <p>Conecte-se a promoimpresso</p>
                                <ul id="social_links"> 
                                    <li><a href="https://www.facebook.com/promoimpresso/" target="_blank">
                                            <img src="_imagens/icon/_sociais/icon_face.png" alt="FacebookIcon"/></a></li>
                                    <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                                            <img src="_imagens/icon/_sociais/instagram.png" alt="InstagramIcon"/></a></li>
                                    <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                                            <img src="_imagens/icon/_sociais/icon_link.png" alt="LinkedinIcon"/></a></li>
                                    <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">
                                            <img src="_imagens/icon/_sociais/googleMais.png" alt="GoogleIcon"/></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--SEGUNDO FOOTER-->
            <div id="div_segundo_footer">
                <div class="row no-gutters justify-content-start">
                    <div class="col-4">
                        <p>&copy; 2017 - PromoImpresso. Todos os direitos reservados<br/></p>
                        <img id="icone" src="_imagens/logo_branco2.png" alt="Logo"/>
                    </div>
                    <div class="col-2">
                        <h5>A Gráfica</h5> 
                        <ul class="opcoes_footer">
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Institucional</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Gabaritos</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Cadastro</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Contato</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Privacidade</a></li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h5>+ Vendidos</h5> 
                        <ul class="opcoes_footer">
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Placas Diversos</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Talões/Blocos</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Cartaz</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Banner</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Rotúlos</a></li>
                        </ul>
                    </div>
                    <div class="col-4" style="padding-top: 30px;"> 
                        <ul class="opcoes_footer">
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Convites</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Folhinha Comercial</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Cardápios</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Adesivos/Etiquetas</a></li>
                            <li><a href="https://br.linkedin.com/company/promoimpresso" target="_blank">Tags</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--TERCEIRO FOOTER-->
            <div id="div_terceiro_footer">
                <div class="row no-gutters">
                    <!--FORMAS DE PAGAMENTO-->
                    <div class="col-4" style="position:relative;">
                        <p>FORMAS DE PAGAMENTO</p>
                        <div class="row justify-content-md-center">
                            <ul id="formas_de_pagamento">
                                <li><img src="_imagens/_formas_pagamento/itau.png" alt="logoItau"/></li>
                                <li><img src="_imagens/_formas_pagamento/visa.png" alt="logoVisa"/></li>
                                <li><img src="_imagens/_formas_pagamento/masterCard.png" alt="logoMasterCard"/></li>
                                <li><img src="_imagens/_formas_pagamento/elo.png" alt="logoElo"/></li>
                                <li><img src="_imagens/_formas_pagamento/americanExpress.png" alt="logoAmericanExpress"/></li>
                                <li><img src="_imagens/_formas_pagamento/boleto.png" alt="logoBoleto"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <p>CERTIFICADOS</p>
                        <div class="row justify-content-md-center">
                            <ul id="formas_de_pagamento">
                                <li><img src="_imagens/_certificados/serasaExperian.png" alt="logoSerasa"/></li>
                                <li><img src="_imagens/_certificados/siteSeguro.png" alt="logoSiteSeguro"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2">
                        <p class="text-center">CNPJ: 03.721.992/0001-34</p>
                    </div>
                    <div class="col-2">
                        <div class="row no-gutters justify-content-md-center">
                            <a href="#top" class="text-center" style="text-decoration: none; color: #77787b">
                                <img src="_imagens/icon/arrowUp.png" alt="SetaTopoPagina" style="width: 30px;"><br/>Topo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #ebebeb; height: 30px;">
            </div>
        </footer>
    </body>
</html>