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

//CALCULA A QUANTIDADE DE PRODUTOS----------------------------------------------
window.onload = function() {
    calc_total();
};

function calc_total() {
    var qtd = parseFloat(document.getElementById('cQuantidade').value);
    tot = qtd * 24.99;
    tot = parseFloat(tot.toFixed(4));
    document.getElementById('cTotalProduto').value = "R$ " + tot;
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