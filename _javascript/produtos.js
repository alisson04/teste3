//MARCA A COR SELECIONADA-----------------------------------------------------//
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
}

//CALCULA O PREÇO TOTAL E UNITARIO DO PRODUTO-----------------------------------
window.onload = function () {
    calc_total();
};

function calc_total() {//EVITAR USAR Parametros por a função é chamado no próprio arquivo 
    var categoria = document.getElementById('h1_nome_produto').firstChild.nodeValue;
    var preco;
    if (categoria === "Banner") {
        preco = gerarPrecoBanner();
    } else if (categoria === "Panfleto") {

    } else {

    }

    if (document.getElementById('cQuantidade').value) {
        var qtd = parseFloat(document.getElementById('cQuantidade').value);
        tot = qtd * preco;
        tot = parseFloat(tot.toFixed(4));
        document.getElementById('cTotalProduto').value = "R$ " + tot;
    } else {
        document.getElementById('cTotalProduto').value = "R$ " + 0;
    }
}

//PRODUTO BANNER----------------------------------------------------------------
function gerarPrecoBanner() {
    var precoUnidade = 0;
    var tamanho = document.getElementById("cTamanho").value;
    var quantidade = document.getElementById("cQuantidade").value;

    if (quantidade < 3) {//MENOS DE 3
        precoUnidade = calculaBaseBanner(tamanho, 120);
    } else if (quantidade < 8) {//MENOS DE 8  BANNERS
        precoUnidade = calculaBaseBanner(tamanho, 100);
    } else {//MAIS DE 10 BANNERS
        precoUnidade = calculaBaseBanner(tamanho, 90);
    }

    precoUnidade = parseFloat(precoUnidade.toFixed(4));
    document.getElementById('cPrecoUnitario').value = "Preco unitário: R$ " + precoUnidade;
    return precoUnidade;
}

function calculaBaseBanner(tamanho, porcentagem) {
    var material = document.getElementById("cMaterial").value;

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
            alert("ERRO GRAVE");
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

//CALCULA A QUANTIDADE DE PRODUTOS----------------------------------------------
function quanti() {
    $valor = document.getElementById("cQuantidade").value;
    document.getElementById("cQuanti").value = "/ " + $valor + " Unidades";
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

    if (id && tam && quant && cor && mate) {
        alert(id + " / " + tam + " / " + quant + " / " + cor + " / " + mate);
        $.ajax({
            type: 'post',
            url: 'geradorPrecosProdutos.php',
            data: {
                produtoTamanho: tam,
                produtoId: id,
                produtoQuantidade: quant,
                produtoCor: cor,
                produtoMaterial: mate
            },
            success: function (response) {
                document.getElementById("status").innerHTML = "Form Submitted Successfully";
                ;
            }
        });
    }
    return false;
}