$(document).ready(function () {
    function inicializarTooltips() { 
        
        if (window.innerWidth >= 995) { 
            $('[data-bs-toggle="tooltip"]').tooltip(); 
        
        //Para dispositivos moviles lo saco porque queda feo
        } else {
            $('[data-bs-toggle="tooltip"]').each(function () {
                $(this).removeAttr("data-bs-toggle"); 
                $(this).removeAttr("title");
            });
        }
    }
    inicializarTooltips();
    
    $('.nav-link').on('click', function () {
        $('.nav-link.active').removeClass('active').removeAttr('aria-current');
        $(this).addClass('active').attr('aria-current', 'page');

        var seccion = $(this).data('section');
        switch (seccion) {
            case 'cargas':
                $('.css-dinamico').remove();
                var cssLink = $('<link>', {
                    rel: 'stylesheet',
                    type: 'text/css',
                    href: '/activos/css/cargas/buscador-cargas.css',
                    class: 'css-dinamico'
                });
                $('head').append(cssLink);
                $('#contenido-main').load('/activos/componentes/cargas/buscador-cargas.php', function() { inicializarTooltips(); }); break;
                break;

            case 'licitaciones':
                $('.css-dinamico').remove();
                $('#contenido-main').empty();
                break;

            case 'comunidad':
                $('.css-dinamico').remove();
                $('#contenido-main').empty();
                break;

            case 'postulaciones':
                $('.css-dinamico').remove();
                $('#contenido-main').empty();
                break;

            case 'presentacion':
                $('.css-dinamico').remove();
                $('#contenido-main').empty();
                break;
        }
    });

});


