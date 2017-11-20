/*MARCA A COR SELECIONADA-----------------------------------------------------//
 function selecionaCorProduto(controle) {
 var imgCartao0 = document.getElementById("corCaneca0");
 var imgCartao1 = document.getElementById("corCaneca1");
 var imgCartao2 = document.getElementById("corCaneca2");
 var imgCartao3 = document.getElementById("corCaneca3");
 if (controle === 1) {
 imgCartao0.style.display = "";
 imgCartao1.style.display = "none";
 imgCartao2.style.display = "none";
 imgCartao3.style.display = "none";
 } else if (controle === 2) {
 imgCartao0.style.display = "none";
 imgCartao1.style.display = "";
 imgCartao2.style.display = "none";
 imgCartao3.style.display = "none";
 } else if (controle === 3) {
 imgCartao0.style.display = "none";
 imgCartao1.style.display = "none";
 imgCartao2.style.display = "";
 imgCartao3.style.display = "none";
 } else {
 imgCartao0.style.display = "none";
 imgCartao1.style.display = "none";
 imgCartao2.style.display = "none";
 imgCartao3.style.display = "";
 }
 }*/

/*function geraQuantidadeMin() {
 alert('100');
 var categoria = document.getElementById('h1_nome_produto').firstChild.nodeValue;
 if (categoria === "Banner") {
 return '1';
 } else if (categoria === "Panfleto") {
 alert('100');
 return '100';
 } else {
 
 }
 }
 */

Number.prototype.formatMoney = function (c, d, t) {
    var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d === undefined ? "," : d, t = t === undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

//CALCULA O PREÇO TOTAL E UNITARIO DO PRODUTO-----------------------------------
window.onload = function () {
    calc_total();
};

function calc_total() {//EVITAR USAR Parametros porq a função é chamado no próprio arquivo 
    var categoria = document.getElementById('h1_nome_produto').firstChild.nodeValue;
    var material = document.getElementById("cMaterial").value;
    var tamanho = document.getElementById("cTamanho").value;
    var quantidade = document.getElementById("cQuantidade").value;
    var cor = document.getElementById("cCor").value;

    if (categoria === "Banner") {
        var preco = gerarPrecoBanner(material, tamanho, quantidade);
        var tot = quantidade * preco;
    } else if (categoria === "Panfleto") {
        var preco = gerarPrecoPanfleto(material, tamanho, quantidade, cor);
        var tot = quantidade * preco.precoF;
        tot = tot + (preco.precoC * quantidade);
    } else if (categoria === "Bloco") {
        var preco = gerarPrecoBloco(material, tamanho, quantidade, cor);
        var tot = quantidade * preco.precoF;
        tot = tot + (preco.precoC * quantidade);
    } else {

    }

    /*Seta o preço unitário e total na tela
     document.getElementById('cTotalProduto').value = "R$ " + (tot).formatMoney(2, ',', '.');
     document.getElementById('cPrecoUnitario').value = "Preco unitário: R$ " + (tot / quantidade).formatMoney(2, ',', '.');
     */
    document.getElementById('cTotalProduto').value = "R$ " + tot.toFixed(2);
    document.getElementById('cPrecoUnitario').value = "Preco unitário: R$ " + (tot / quantidade).toFixed(2);
}

//PRODUTO BLOCO==================================================================================================================================
function gerarPrecoBloco(material, tamanho, quantidade, cor) {
    var atributo1 = document.getElementById('cAtributo1').value;
    var valor;
    var porcentagem;

    if (material === "Papel copiativo(carbonado) 63GR") {
        if (tamanho === "10 X 15") {
            if (atributo1 === "1 Via" || atributo1 === "2 Vias") {
                if (cor === "1 X 0") {
                    valor = 2.32;
                } else if (cor === "1 X 1") {
                    valor = 3.32;
                } else {

                }

                if (quantidade < 25) {
                    porcentagem = 2.5;
                } else {
                    porcentagem = 2;
                }
            } else if (atributo1 === "3 Vias") {
                valor = 3.23;

                if (quantidade < 25) {
                    porcentagem = 2.5;
                } else {
                    porcentagem = 2;
                }
            } else {
                alert("err");
            }

            return {precoF: valor * porcentagem, precoC: valor};
        } else if (tamanho === "15 X 21") {
            if (atributo1 === "1 Via" || atributo1 === "2 Vias" || atributo1 === "3 Vias") {
                valor = 0.5;

                if (quantidade < 25) {//QUANTIDADE===
                    porcentagem = 2.5;
                } else {
                    porcentagem = 2;
                }
            } else {
                alert("err");
            }

            return {precoF: valor * porcentagem, precoC: valor};
        } else if (tamanho === "20 X 29") {

        } else {

        }
    } else if (material === "Papel Offset 75GR") {

    } else {

    }
}

//PRODUTO BANNER=================================================================================================================================
//O preco do banner é dado por um valor fixo(custo de produção que muda em função do material e cor usada)  
//multiplicado por uma determinada porcentagem
//A porcentagem oscila dependendo de quantidadede de produtos que esta sendo comprada
function gerarPrecoBanner(material, tamanho, quantidade) {
    if (quantidade < 3) {//MENOS DE 3
        return calculaBaseBanner(material, tamanho, 120);
    } else if (quantidade < 8) {//MENOS DE 8  BANNERS
        return calculaBaseBanner(material, tamanho, 100);
    } else {//MAIS DE 10 BANNERS
        return calculaBaseBanner(material, tamanho, 90);
    }
}

function calculaBaseBanner(material, tamanho, porcentagem) {
    if (material === "LONA 440, BRILHO, CORDA" || material === "LONA 440, FOSCO, CORDA") {
        if (tamanho === "40 X 60") {
            return 0.25 * porcentagem;
        } else if (tamanho === "60 X 90") {
            return 0.54 * porcentagem;
        } else if (tamanho === "70 X 1,20") {
            return 0.84 * porcentagem;
        } else if (tamanho === "1,00 X 1,50") {
            return 1.5 * porcentagem;
        } else if (tamanho === "1,00 X 2,00") {
            return 2.00 * porcentagem;
        } else {
            alert("ERRO GRAVE: calculaBaseBanner");
            return 0;
        }
    } else if (material === "LONA 440, BRILHO, ILHOS" || material === "LONA 440, FOSCO, ILHOS") {
        if (tamanho === "40 X 60") {
            return 0.582 * porcentagem;
        } else if (tamanho === "60 X 90") {
            return 0.87 * porcentagem;
        } else if (tamanho === "70 X 1,20") {
            return 1.164 * porcentagem;
        } else if (tamanho === "1,00 X 1,50") {
            return 1.755 * porcentagem;
        } else if (tamanho === "1,00 X 2,00") {
            return 2.34 * porcentagem;
        } else {
            alert("ERRO GRAVE");
            return 0;
        }
    } else {
        alert("ERRO GRAVE");
        return 0;
    }
}

//PRODUTO PANFLETO===============================================================================================================================
//O preco do panfleto é dado por um valor fixo(custo de produão que muda em 
function gerarPrecoPanfleto(material, tamanho, quantidade, cor) {
    var precoCustoUnidade = 0;
    if (material === "OFFSET 75 GR") {//MATERIAIS
        if (tamanho === "7,5 X 10") {//TAMANHOS
            if (cor === "1 X 0") {//CORES
                precoCustoUnidade = 0.0095;
                if (quantidade < 1000) {
                    return {precoF: precoCustoUnidade * 7, precoC: precoCustoUnidade};
                } else {
                    return {precoF: precoCustoUnidade * 6, precoC: precoCustoUnidade};
                }
            } else if (cor === "1 X 1") {
                precoCustoUnidade = 0.0145;
                if (quantidade > 100) {
                    return {precoF: precoCustoUnidade * 5, precoC: precoCustoUnidade};
                } else {
                    return {precoF: precoCustoUnidade * 7, precoC: precoCustoUnidade};
                }
            } else if (cor === "4 X 0") {
                precoCustoUnidade = 0.0670;
                if (quantidade < 500) {
                    return {precoF: precoCustoUnidade * 3.5, precoC: precoCustoUnidade};
                } else if (quantidade < 1000) {
                    return {precoF: precoCustoUnidade * 2, precoC: precoCustoUnidade};
                } else {
                    return {precoF: precoCustoUnidade * 1.5, precoC: precoCustoUnidade};
                }
            } else if (cor === "4 X 4") {
                precoCustoUnidade = 0.1295;
                if (quantidade < 500) {
                    return {precoF: precoCustoUnidade * 3.5, precoC: precoCustoUnidade};
                } else if (quantidade < 1000) {
                    return {precoF: precoCustoUnidade * 2, precoC: precoCustoUnidade};
                } else {
                    return {precoF: precoCustoUnidade * 1.5, precoC: precoCustoUnidade};
                }
            } else {
                alert("ERRO GRAVE");
                return 0;
            }
            //O dois tamanhos abaixo estão juntos pois tem a mesma oscilação de porcentagem em relação a quantidade
        } else if (tamanho === "10 X 15" || tamanho === "15 X 21") {
            var valor;//Recebe o preco unitario de acordo com a cor escolhida
            if (tamanho === "10 X 15") {//Esse If Else define o preco unitario do produto de acordo com o tamanho
                if (cor === "1 X 0") {//CORES
                    valor = 0.0182;
                } else if (cor === "1 X 1") {
                    valor = 0.0282;
                } else if (cor === "4 X 0") {
                    valor = 0.1332;
                } else if (cor === "4 X 4") {
                    valor = 0.2582;
                } else {
                    alert("ERRO GRAVE");
                    return 0;
                }
            } else {
                if (cor === "1 X 0") {//CORES
                    valor = 0.0363;
                } else if (cor === "1 X 1") {
                    valor = 0.0563;
                } else if (cor === "4 X 0") {
                    valor = 0.2663;
                } else if (cor === "4 X 4") {
                    valor = 0.5163;
                } else {
                    alert("ERRO GRAVE");
                    return 0;
                }
            }

            if (quantidade < 500) {//Esse If ELSE define a porcentagem que será usada no calculo, com base na quantidade
                return {precoF: valor * 3.5, precoC: valor};
            } else if (quantidade < 1000) {
                return {precoF: valor * 2, precoC: valor};
            } else {
                return {precoF: valor * 1.5, precoC: valor};
            }
        } else if (tamanho === "20 X 29") {
            var valor;//Recebe o preco unitario de acordo com a cor escolhida
            var porcentagem;

            if (cor === "1 X 0" || cor === "1 X 1") {
                if (quantidade < 500) {//Esse If ELSE define a porcentagem que será usada no calculo, com base na quantidade
                    porcentagem = 3.5;
                } else {
                    porcentagem = 1.5;
                }
            } else {
                if (quantidade < 1000) {//Esse If ELSE define a porcentagem que será usada no calculo, com base na quantidade
                    porcentagem = 1.5;
                } else {
                    porcentagem = 1;
                }
            }

            if (cor === "1 X 0") {//CORES
                valor = 0.0725;
            } else if (cor === "1 X 1") {
                valor = 0.1125;
            } else if (cor === "4 X 0") {
                valor = 0.5325;
            } else if (cor === "4 X 4") {
                valor = 1.0325;
            } else {
                alert("ERRO GRAVE");
                return 0;
            }

            return {precoF: valor * porcentagem, precoC: valor};
        } else {
            alert("ERRO NO TAMANHO");
            return 0;
        }
    } else {
        alert("ERRO NO MATERIAL");
        return 0;
    }
}

//CALCULA A QUANTIDADE DE PRODUTOS----------------------------------------------
function quanti() {
    var valor = document.getElementById("cQuantidade").value;
    valor = parseFloat(valor);
    document.getElementById("cQuanti").value = "/ " + valor.formatMoney(0, ',', '.') + " Unidades";
}

//PAGINATOR DESCRIÇÃO DO PRODUTO------------------------------------------------
function mudaPaginaDescricaoProdutos(controle) {
    var maisVendidos = document.getElementById("a_produto");
    var lacamentos = document.getElementById("a_especificacoes");
    if (controle === 1) {
        maisVendidos.style.color = "#27cbc0";
        maisVendidos.style.borderBottom = "4px solid #27cbc0";
        lacamentos.style.color = "#77787b";
        lacamentos.style.borderBottom = "4px solid #77787b";
    } else {
        maisVendidos.style.color = "#77787b";
        maisVendidos.style.borderBottom = "4px solid #77787b";
        lacamentos.style.color = "#27cbc0";
        lacamentos.style.borderBottom = "4px solid #27cbc0";
    }
}

//POST GERAR O PRECO
function adicionarAoCarrinho() {
    var id = document.getElementById("cId").value;
    var tam = document.getElementById("cTamanho").value;
    var quant = document.getElementById("cQuantidade").value;
    var cor = document.getElementById("cCor").value;
    var mate = document.getElementById("cMaterial").value;
    var prec = (document.getElementById('cPrecoUnitario').value).split('$')[1];//Pega o texto do campo produto; separa pelos ":"; pega oque tiver depois
    var total = (document.getElementById('cTotalProduto').value).split('$')[1];
    alert(total);

    $.ajax({
        type: 'post',
        url: 'CarrinhoAdd.php',
        data: {
            produtoTamanho: tam,
            produtoIdCat: id,
            produtoQuantidade: quant,
            produtoCor: cor,
            mate: mate,
            produtoPreco: prec,
            total: total
        },
        success: function (response) {
            document.getElementById("status").innerHTML = "Form Submitted Successfully";
            ;
        }
    });

    return false;
}