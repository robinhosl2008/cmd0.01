/**
 * Created by dev on 06/03/17.
 */

// $(document).ready(function(){
//     $('#entrar').onclick(function(){
//         submitLogin();
//     });
// });

function submitLogin() {
    var email = $('#email').val();
    var senha = $('#senha').val();
    var token = $('#_token').val();
    var data = {
        email: email,
        senha: senha,
        _token: token
    };

    if (email === '') {
        $('#email').focus();
        $('.alertaFormLoginEmail').show();
        $('.alertaFormLoginSenha').hide();
    } else {
        if (senha === '') {
            $('#senha').focus();
            $('.alertaFormLoginSenha').show();
            $('.alertaFormLoginEmail').hide();
        } else {
            $.ajax({
                url: "/logar",
                method: "POST",
                dataType: "json",
                data: data,
                success: function (data) {
                    if(data.mensagem){
                        $('#alertLogin').empty();
                        $('#alertLogin').show();

                        var html = "" +
                            "<div class='alert alert-" + data.tipo_mensagem + " alert-dismissible' role='alert'>" +
                            "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
                            "<span aria-hidden='true'>&times;</span>" +
                            "</button>" +
                            data.mensagem +
                            "</div>";

                        $('#alertLogin').append(html);
                        setTimeout(function () {
                            $('#alertLogin').fadeOut('fast');
                            if(data.logado === 'sim') {
                                window.location.replace("http://192.168.0.130:8000/home");
                            }
                        }, 2000);
                    }
                },
                error: function (xhr) {
                    alert(xhr.responseText);
                }
            });
            // $('#formLogin').submit();
        }
    }
}

function limpaEmailLogin() {
    $('.alertaFormLoginEmail').hide();
}

function limpaSenhaLogin() {
    $('.alertaFormLoginSenha').hide();
}

function sairSistema(id) {
    var token = $('#_token').val();
    $.ajax({
        url: "/sair",
        method: "POST",
        data: {
            id: id,
            _token: token
        },
        success: function () {
            window.location.replace("http://192.168.0.130:8000");
        }
    });
}