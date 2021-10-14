const input = document.getElementById('telefone')

$(input).on('keyup', function (e) {
    if(!$.isNumeric(e.key)){
        input.value = input.value.substring(0, input.value.length-1)
    }
})

function mask(e, id, mask) {
    if ($.isNumeric(e.key)) {
        mascara(id, mask);
        return true;
    }
}
function mascara(id, mask) {
    var i = id.value.length;
    var carac = mask.substring(i, i + 1);
    console.log(carac)
    var prox_char = mask.substring(i + 1, i + 2);
    if (i == 0 && carac != '#') {
        insereCaracter(id, carac);
        if (prox_char != '#') insereCaracter(id, prox_char);
    }
    else if (carac != '#') {
        insereCaracter(id, carac);
        if (prox_char != '#') insereCaracter(id, prox_char);
    }
    function insereCaracter(id, char) {
        id.value += char;
    }
}