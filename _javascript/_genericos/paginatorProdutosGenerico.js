//PAGINATOR PRODUTOS------------------------------------------------------------
function mudaEstilo(controle) {
    var maisVendidos = document.getElementById("a_mais_vendidos");
    var lacamentos = document.getElementById("a_lancamentos");
    var emBreve = document.getElementById("a_em_breve");

    if (controle === 1) {
        maisVendidos.style.color = "#27cbc0";
        maisVendidos.style.borderBottom = "4px solid #27cbc0";
        lacamentos.style.color = "#77787b";
        lacamentos.style.borderBottom = "4px solid #77787b";
        emBreve.style.color = "#77787b";
        emBreve.style.borderBottom = "4px solid #77787b";
    } else if (controle === 2) {
        maisVendidos.style.color = "#77787b";
        maisVendidos.style.borderBottom = "4px solid #77787b";
        lacamentos.style.color = "#27cbc0";
        lacamentos.style.borderBottom = "4px solid #27cbc0";
        emBreve.style.color = "#77787b";
        emBreve.style.borderBottom = "4px solid #77787b";
    } else {
        maisVendidos.style.color = "#77787b";
        maisVendidos.style.borderBottom = "4px solid #77787b";
        lacamentos.style.color = "#77787b";
        lacamentos.style.borderBottom = "4px solid #77787b";
        emBreve.style.color = "#27cbc0";
        emBreve.style.borderBottom = "4px solid #27cbc0";
    }
}