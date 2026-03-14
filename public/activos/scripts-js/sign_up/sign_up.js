$(document).ready(function () {
    //Obtiene la lista de países
    $.ajax({
        type: 'POST',
        url: '/api/gateway_backend.php',
        contentType: "application/json",
        dataType: 'json',
        data: JSON.stringify({
            servicio: "nacionalidad.paises",

        }),
        success: function (respuestaServer) {
            console.log(respuestaServer);

            if (respuestaServer.estado == false) {
                alert(respuestaServer.mensaje);
            } else {
                $.each(respuestaServer.lista, function (index, valor) {
                    $('#país').append(valor);
                });
            }
        }, error: function (xhr, respuestaServer) {
            alert(respuestaServer);
            console.log(xhr);
        }
    });

    $('.btn-registrarse').on('click', function (event) {
        event.preventDefault();
        $('.btn-registrarse').prop('disabled', true);

        var datosArray = $('.formulario').serializeArray();

        datosArray.push({
            name: 'condiciones',
            value: $("#condiciones").is(":checked") ? 1 : 0
        });

        var datos = {};
        $.each(datosArray, function (_, campo) {
            datos[campo.name] = campo.value;
        });

        $.ajax({
            type: 'POST',
            url: '/api/gateway_backend.php',
            contentType: "application/json",
            dataType: 'json',
            data: JSON.stringify({
                servicio: "usuario.signup",
                datos: datos

            }),
            success: function (respuestaServer) {
                if (respuestaServer.estado) {
                    alert(respuestaServer.mensaje);
                    $('.btn-registrarse').prop('disabled', false);

                } else {
                    alert(respuestaServer);
                    $('.btn-registrarse').prop('disabled', false);

                }
            }, error: function (xhr, respuestaServer) {
                alert(respuestaServer);
                console.log(xhr);
            }
                
        });

    });


    $('.btn-login').on('click', function (event) {
        event.preventDefault();
        window.location.href = '/paginas/login.php';
    });
});