/**
 * Login
 */
var login = document.getElementById('login');
// Se existir o form de login, validar campos
if (login) {
    // "Escuta" o evento `onsubmit` do form
    login.onsubmit = function(e) {
        // Inicializa a variavel que mostra se tem erro ou não
        var erro = false;
        // Inicializa a mensagem de erro
        var mensagem = 'Favor preencher os campos abaixo: \n\n';

        // Loop em cada elemento do formulário
        for (var i = 0; i < login.elements.length; i++) {
            // Guarda o elemento atual pra evitar a fadiga
            var input = login.elements[i];
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

        if (erro) {
            alert(mensagem);
            return false;
        }

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
    var tipos = ['text', 'password', 'textarea', 'email', 'number'];

    // Loop em todos os tipos de input que podem ser validados
    for (var i = 0; i < tipos.length; i++) {
        if (input.type === tipos[i]) {
            return true;
        }
    }

    return false;
}