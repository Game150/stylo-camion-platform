$(document).ready(function () {

    $('.login-container').on('submit', function (e) {
        e.preventDefault();
        $('.btn-login').prop('disabled',true);
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
                servicio: "usuario.login",
                datos: datos

            }),
            success: function (respuestaServer) {
                if (respuestaServer.estado) {
                    alert(respuestaServer.mensaje);
                    window.location.href = '/paginas/seleccion.php';
                } else {
                    alert(respuestaServer);
                    $('.btn-login').prop('disabled',false);
                }
            }, error: function (xhr, respuestaServer) {
                alert(respuestaServer);
                console.log(xhr,respuestaServer);
                $('.btn-login').prop('disabled',false);
            }
        });
    });

    /*
    $('#boton-google').on('click', function (event) {
        event.preventDefault();
    });
    */
});