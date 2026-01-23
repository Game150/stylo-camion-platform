<?php
$config = include('config.php');
$clave_secreta = $config['clave_secreta'];

//Se verifica la autenticidad del usuario, se obtiene el id unicamente para trabajar con la session
$id = $usuario_id;
$session = ['usuario_id' => $id, 'vencimiento' => time() + 3600];

//Creacción del token
$sesionCodificada64 = base64_encode(json_encode($session));

//Creación de la firma session+clave hasheada en sha256;
$firma = hash_hmac('sha256', $sesionCodificada64, $clave_secreta);

//Mescla el JSON y la Firma(sha256(session+clave)) separado solamente por un $ xd
$token_sesion = $sesionCodificada64 . '$' . $firma;

//guardarenGalletita ;3
setcookie('auten_token', $token_sesion, [
    'expires' => time() + 3600,   // 1 hora
    'path' => '/',
    'domain' => '',               // tu dominio
    'secure' => true,             // solo HTTPS
    'httponly' => true,           // JS no puede leer
    'samesite' => 'Strict'        // No se envía en requests cross-site
]);

?>