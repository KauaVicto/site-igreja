$(document).ready(function () {

    var data_hoje = new Date;
    var hoje = data_hoje.getFullYear() + '-' + (data_hoje.getMonth()+1) + '-' + data_hoje.getDate()
    $('#dia').attr('value', hoje)

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
})