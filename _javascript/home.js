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

//TIMER-------------------------------------------------------------------------
// Set the date we're counting down to
var countDownDate = new Date("Oct 19, 2017 23:59:59").getTime();
// Update the count down every 1 second
var x = setInterval(function () {
    // Get todays date and time
    var now = new Date().getTime();
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Display the result in the element with id="demo"
    document.getElementById("timer_days").innerHTML = days + "d";
    document.getElementById("timer_hours").innerHTML = hours + "h";
    document.getElementById("timer_mins").innerHTML = minutes + "m";
    document.getElementById("timer_secs").innerHTML = seconds + "s";

    // If the count down is finished, write some text 
    if (distance < 0) {
        clearInterval(x);
    } else {
        document.getElementById("div_promocao").style.display = '';//Mostra a div de promoção
    }
}, 1000);