$(document).ready(function () {
    /* deixar uma data padrão no formulário de criar uma devocional */
    var data_hoje = new Date;
    var hoje = data_hoje.getFullYear() + '-' + (data_hoje.getMonth() + 1) + '-' + data_hoje.getDate()
    $('#dia').attr('value', hoje)

    /* verificar se o campo assunto está preenchido */
    $('#assunto').on('blur', function () {
        if ($('#assunto').val().length == 0) {
            $('#assunto').css({
                borderColor: 'red'
            })
                .attr("placeholder", "(!) Digite o assunto")
        }
    })
    $('#assunto').on('focus', function () {

        $('#assunto').css({
            borderColor: '#9e9e9e'
        })
            .attr("placeholder", "")
    })

    /* animar os campos de login */
    $('#user').on('focus', function () {
        $('#campo-user').css({
            width: '220px',
            borderRadius: '20px'
        })
    })
    $('#user').on('blur', function () {
        if ($('#user').val() == '') {
            $('#campo-user').css({
                width: '200px',
                borderRadius: '10px'
            })
        }

    })
    $('#pass').on('focus', function () {
        $('#campo-pass').css({
            width: '220px',
            borderRadius: '20px'
        })
    })
    $('#pass').on('blur', function () {
        if ($('#pass').val() == '') {
            $('#campo-pass').css({
                width: '200px',
                borderRadius: '10px'
            })
        }
    })
})