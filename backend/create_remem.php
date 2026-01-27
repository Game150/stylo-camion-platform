<?php
$config = require __DIR__ . '/../config/config.php';
$clave_secreta = $config['SECRET'];

//Se verifica la autenticidad del usuario, se obtiene el id unicamente para trabajar con la session
//$id = $usuario_id;
$session = ['usuario_id' => $id, 'vencimiento' => time() + 60*60*24*30];

//Creacción del token
$sesionCodificada64 = base64_encode(json_encode($session));

//Creación de la firma session+clave hasheada en sha256;
$firma = hash_hmac('sha256', $sesionCodificada64, $clave_secreta);

//Mescla el JSON y la Firma(sha256(session+clave)) separado solamente por un $ xd
$remen_token = $sesionCodificada64 . '$' . $firma;
    
//guardarenGalletita ;3

//Produccion
setcookie('remen_token', $remen_token, [
    'expires' => time() + 60*60*24*30,   // 30 días
    'path' => '/',
    'domain' => 'stylocamion.com',// tu dominio
    'secure' => true,             // solo HTTPS
    'httponly' => true,           // JS no puede leer
    'samesite' => 'Lax'           // No se envía en requests cross-site
]);

/*
//Localhost
setcookie('remen_token', $remen_token, [
    'expires' => time() + 60*60*24*30,   // 30 días
    'path' => '/', 
    'secure' => false, // porque no tenés HTTPS en localhost 
    'httponly' => true, 
    'samesite' => 'lax' 
]);
*/
?>