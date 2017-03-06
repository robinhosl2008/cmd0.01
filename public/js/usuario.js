/**
 * Created by dev on 06/03/17.
 */

function submitLogin() {
    var email = $('#email').val();
    var senha = $('#senha').val();
    var token = $('#_token').val();

    if (email === '') {
        $('#email').focus();
        $('#alertaFormLoginEmail').show();
    } else {
        if (senha === '') {
            $('#senha').focus();
            $('#alertaFormLoginSenha').show();
        } else {
            $.ajax({
                url: "/logar",
                method: "POST",
                dataType: "json",
                data: {
                    email: email,
                    senha: senha,
                    token: token
                },
                success: function (data) {
                    alert(data);
                }
            });
            // $('#formLogin').submit();
        }
    }
}

function limpaEmailLogin() {
    $('#alertaFormLoginEmail').hide();
}

function limpaSenhaLogin() {
    $('#alertaFormLoginSenha').hide();
}