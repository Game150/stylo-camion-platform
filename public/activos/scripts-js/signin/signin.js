$(document).ready(function () {
    $('#formulario').on('submit', function (event) {
        event.preventDefault();
        var datos = {};
        $.each($(this).serializeArray(), function () {
            datos[this.name] = this.value;
        });

        $.ajax({
            type: 'POST',
            url: '/api/gateway_backend.php',
            contentType: "application/json",
            dataType: 'json',
            data: JSON.stringify({
                servicio: "usuario.signin",
                datos: datos

            }),
            success: function (respuestaServer) {
                if (respuestaServer.estado) {
                    alert(respuestaServer.mensaje);
                    window.location.href = '/paginas/login.php';
                } else {
                    alert(respuestaServer);
                }
            }, error: function (xhr, respuestaServer) {
                alert(respuestaServer);
                console.log(xhr);
            }
        });
    });

    $('#boton-regresar').on('click', function (event) {
        event.preventDefault();
        window.location.href = '/';
    });
});