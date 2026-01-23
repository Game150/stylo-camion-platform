<?php
/* 
Un token CSRF (Cross-Site Request Forgery) es una medida de seguridad utilizada para 
proteger aplicaciones web contra ataques de falsificación de solicitudes entre sitios. 
Este tipo de ataque ocurre cuando un atacante engaña a un usuario autenticado para que 
realice acciones no deseadas en un sitio web en el que está autenticado.
*/


session_set_cookie_params([
    'lifetime' => 0,       // Session hasta cerrar navegador, o tiempo en segundos
    'path' => '/',          // Disponible en todo el dominio
    'domain' => '',         // Tu dominio (localhost o ejemplo.com)
    'secure' => true,       // Solo HTTPS
    'httponly' => true,     // JS no puede leerla
    'samesite' => 'Strict'  // Protege contra CSRF
]);

session_start();

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$csrf_token = $_SESSION['csrf_token'];

?>