//CALCULA O PREÇO TOTAL DO PRODUTO----------------------------------------------
window.onload = function () {
};

function calc_total(idQuant, preco, idTotal) {
    var qtd = parseFloat(document.getElementById(idQuant).value);
    tot = qtd * preco;
    tot = parseFloat(tot.toFixed(4));
    document.getElementById(idTotal).value = "R$ " + tot;
}

//CALCULA A QUANTIDADE DE PRODUTOS----------------------------------------------
function quanti(idIn, idOut) {
    $valor = document.getElementById(idIn).value;
    document.getElementById(idOut).value = "/ " + $valor + " Unidades";
}