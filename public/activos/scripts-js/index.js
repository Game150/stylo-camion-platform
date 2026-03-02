$(document).ready(function () {
    $('.nav-link').on('click', function () {
        $('.nav-link.active').removeClass('active').removeAttr('aria-current');
        $(this).addClass('active').attr('aria-current', 'page');

        var seccion = $(this).data('section');
        switch (seccion) {
            case 'inicio':
                $('.css-dinamico').remove();
                var cssLink = $('<link>', {
                    rel: 'stylesheet',
                    type: 'text/css',
                    href: '/activos/css/index/index-inicio.css',
                    class: 'css-dinamico'
                });
                $('head').append(cssLink);
                $('#contenido-main').load('/activos/componentes/index/inicio.php', function () {
                });
                break;

            case 'servicios':
                $('.css-dinamico').remove();
                var cssLink = $('<link>', {
                    rel: 'stylesheet',
                    type: 'text/css',
                    href: '/activos/css/index/index-servicios.css',
                    class: 'css-dinamico'
                });
                $('head').append(cssLink);
                $('#contenido-main').load('/activos/componentes/index/servicios.php', function () {
                });
                break;

            case 'nosotros':
                $('.css-dinamico').remove();
                var cssLink = $('<link>', {
                    rel: 'stylesheet',
                    type: 'text/css',
                    href: '/activos/css/index/index-nosotros.css',
                    class: 'css-dinamico'
                });
                $('head').append(cssLink);
                $('#contenido-main').load('/activos/componentes/index/nosotros.php', function () {
                });
                break;

            case 'comunidad':
                $('.css-dinamico').remove();
                var cssLink = $('<link>', {
                    rel: 'stylesheet',
                    type: 'text/css',
                    href: '/activos/css/index/index-comunidad.css',
                    class: 'css-dinamico'
                });
                $('head').append(cssLink);
                $('#contenido-main').load('/activos/componentes/index/comunidad.php', function () {
                });
                break;
        }
    });
});
