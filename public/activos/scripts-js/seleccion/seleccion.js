$(document).ready(function () {
    $('.activo').on('click', function (event) {
        if(confirm('¿Estas seguro que quieres ingresar a CARGAS?')) {
            window.location.href = '/';
        }
    });

});