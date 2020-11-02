$('#preco_cad').on('keydown', function(){
    var valor = $('#preco_cad');
    valor.value = valor.mask('#.##0,00', {reverse: true});
});
