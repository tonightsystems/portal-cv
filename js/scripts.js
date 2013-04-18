
/**
 * Valida o formulário
 *
 * @param  {object}  form  O formulário à ser validado
 * @return {boolean}
 */
function validar(e, form) {
    if (form) {
        // Inicializa a variavel que mostra se tem erro ou não
        var erro = false;
        // Inicializa a mensagem de erro
        var mensagem = 'Favor preencher os campos abaixo: \n\n';

        // Loop em cada elemento do formulário
        for (var i = 0; i < form.elements.length; i++) {
            // Guarda o elemento atual pra evitar a fadiga
            var input = form.elements[i];
            // Valida o input
            if (podeValidar(input) && input.value == '') {
                // Adiciona o atributo `title` do input na mensagem de erro
                mensagem += '- ' + input.title + '\n';
                // Adiciona borda vermelha no input
                input.style.borderColor = 'red';
                // Avisa que tem erro
                erro = true;
            } else if (podeValidar(input)) {
                // Volta com a cor original da borda do input
                input.style.borderColor = '#ccc';
            }
        }

        // Mostra a mensage caso houver erro
        if (erro) {
            alert(mensagem);
            e.preventDefault();
            return false;
        }

        // Submete o formulário caso tudo OK
        return true;
    }
}

/**
 * Verifica se o input é de um tipo que pode ser validado
 *
 * @param  {object}  input  O input que deseja validar
 * @return {boolean}
 */
function podeValidar(input) {
    var tipos = ['text', 'password', 'textarea', 'email', 'number', 'file'];

    // Loop em todos os tipos de input que podem ser validados
    for (var i = 0; i < tipos.length; i++) {
        if (input.type === tipos[i]) {
            return true;
        }
    }

    return false;
}
