//CALCULA O PREÇO TOTAL DO PRODUTO----------------------------------------------
window.onload = function () {
};

function somaTotalVenda(preco, quanti) {
    document.getElementById('c_total_venda').value = (preco * quanti) + parseFloat(document.getElementById('c_total_venda').value);
}
