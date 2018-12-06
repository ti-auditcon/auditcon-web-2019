
$.getScript('/js/jquery.number.min.js', function()
{
  $(document).ready(function() {
    $.getJSON('https://mindicador.cl/api', function(data) {
        var dailyIndicators = data;
        $('.min-dolar').text('$'+$.number(dailyIndicators.dolar.valor,2));
        $('.min-euro').text('$'+$.number(dailyIndicators.euro.valor,2));
        $('.min-uf').text('$'+$.number(dailyIndicators.uf.valor,2));
        $('.min-utm').text('$'+$.number(dailyIndicators.utm.valor,2));
        $('.min-ivp').text('$'+$.number(dailyIndicators.ivp.valor,2));
        $('.min-lc').text('US$'+$.number(dailyIndicators.libra_cobre.valor,2));
        $('.min-ipc').text($.number(dailyIndicators.ipc.valor,2)+'%');
        $('.min-imacec').text($.number(dailyIndicators.imacec.valor,2)+'%');
        $('.min-bitcoin').text('US$'+$.number(dailyIndicators.bitcoin.valor,2));
    //  alert('El valor actual de la UF es $' + dailyIndicators.dolar.valor);
    });
  });

});
