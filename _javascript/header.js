//ESCUTADOR DE SCROLL - Esconde o topo do cabeçalho
window.onscroll = function () {
    var posicaoScroll = $(document).scrollTop();
    var posicaoInicial = $('#div_cabecalho').position().top;

    if (posicaoScroll > posicaoInicial) {
        document.getElementById("div_topo_cabecalho").style.display = 'none';
    } else {
        document.getElementById("div_topo_cabecalho").style.display = '';
    }
};