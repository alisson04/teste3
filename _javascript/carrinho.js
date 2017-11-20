//CALCULA O PREÇO TOTAL DO PRODUTO----------------------------------------------
window.onload = function () {
};

function somaTotalVenda(total) {
    return (total).formatMoney(2, ',', '.');
};

function teste(){
    alert("reasdsad");
}


Number.prototype.formatMoney = function (c, d, t) {
    var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d === undefined ? "," : d, t = t === undefined ? "." : t, s = n < 0 ? "-" : "", 
            i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + 
            (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

//POST GERAR O PRECO
function removerDoCarrinho(id) {
    $.ajax({
        type: 'post',
        url: 'utils/carrinhoDel.php',
        data: {
            excluirItemCarrinho: id
        },
        success: function (response) {
            document.getElementById("status").innerHTML = "Form Submitted Successfully";
            ;
        }
    });

    return false;
}

// Função que verifica se o navegador tem suporte AJAX 
function AjaxF(){
    var ajax;

    try {
        ajax = new XMLHttpRequest();
    } catch (e) {
        try {
            ajax = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajax = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                alert("Seu browser não da suporte à AJAX!");
                return false;
            }
        }
    }
    return ajax;
}

// Função que faz as requisição Ajax ao arquivo PHP
function AlteraConteudoCarrinho(){
    alert("car");
    var ajax = AjaxF();

    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4)
        {
            document.getElementById('div_produtos').innerHTML = ajax.responseText;
        }
    }

    // Variável com os dados que serão enviados ao PHP
   // var dados = "nome=" + document.getElementById('txtnome').value;

    ajax.open(false, "retorna_informacoes.php", true);
    ajax.setRequestHeader("Content-Type", "text/html");
    ajax.send();
}