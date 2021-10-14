$(document).ready(function () {
    /* deixar uma data padrão no formulário de criar uma devocional */
    var data_hoje = new Date;
    var hoje = data_hoje.getFullYear() + '-' + (data_hoje.getMonth() + 1) + '-' + data_hoje.getDate()
    $('#dia').attr('value', hoje)

    /* verificar se o campo assunto está preenchido */
    $('#assunto').on('blur', function () {
        if ($('#assunto').val().length == 0) {
            $('#assunto')
                .css({ borderColor: 'red' })
                .attr("placeholder", "(!) Digite o assunto")
        }
    })
    $('#assunto').on('focus', function () {

        $('#assunto')
            .css({ borderColor: '#9e9e9e' })
            .attr("placeholder", "")
    })


    /* anima e verifica os campos de formulários */
    const campo_login = document.querySelectorAll('.campo')
    const input_login = document.querySelectorAll('.campo input')

    for (let i = 0; i < campo_login.length; i++) {
        input_login[i].addEventListener('focus', function () {
            $(campo_login[i]).css({
                width: '240px',
                borderRadius: '20px',
                borderColor: '#009978'
            })
            $(input_login[i]).attr("placeholder", "")
        })
        input_login[i].addEventListener('blur', function () {
            if ($(input_login[i]).val() == '') {
                $(campo_login[i]).css({
                    width: '220px',
                    borderRadius: '10px',
                    borderColor: '#ff2d2d'
                })
                $(input_login[i]).attr("placeholder", "Preencha o campo!")
            }
        })
    }

    /* anima o menu drop */
    const dp_menu_pai = document.getElementsByClassName('dp-menu-pai')
    const dp_menu_filho = document.getElementsByClassName('dp-menu-filho')


    for (let i = 0; i < dp_menu_pai.length; i++) {
        $(dp_menu_pai[i]).on('mouseover', function () {
            $(dp_menu_filho[i]).css({ top: '100%', opacity: '1', zIndex: '2' })
        })
        $(dp_menu_pai[i]).on('mouseout', function (e) {
            $(dp_menu_filho[i]).css({ opacity: '0', top: '-150px', zIndex: '-2' })
        })
        $(dp_menu_filho[i]).on('mouseover', function (e) {
            $(dp_menu_filho[i]).css({ opacity: '0', top: '-150px', zIndex: '-2' })
        })
        let altMenu = (dp_menu_filho[i].children.length * 25)
        $(dp_menu_filho[i]).css('height', altMenu + 'px')
    }
})