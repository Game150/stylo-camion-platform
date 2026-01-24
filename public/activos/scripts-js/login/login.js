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
                servicio: "chequeo.login",
                datos: datos

            }),
            success: function (respuestaServer) {
                alert(respuestaServer);
            }, error: function (xhr, respuestaServer) {
                alert(respuestaServer);
                console.log(xhr);
            }
        });
    });

    $('#boton-registrarse').on('click', function (event) {
        event.preventDefault();
        window.location.href = '/paginas/sign_in.php';
    });
});