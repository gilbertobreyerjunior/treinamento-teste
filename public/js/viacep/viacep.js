$(document).on('blur', '#cep', function() {
    const cep = $(this).val();



    $.ajax({
        url: 'https://viacep.com.br/ws/' + cep + '/json/',
        method: 'GET',
        dataType: 'json',
        success: function(data) {

            $('#uf').val(data.uf);
            $('#cidade').val(data.localidade);
            $('#bairro').val(data.bairro);
            $('#logradouro').val(data.logradouro);
        }
    });
});