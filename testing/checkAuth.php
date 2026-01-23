<?php
$config = include('config.php');
$clave_secreta = $config['clave_secreta'];

//Verifica si existe la sessión
if (isset($_COOKIE['auten_token'])) {

    //Obtiene de la cookie tomanto en cuenta el $ para separar la session de la firma
    list($sesionCodificada64, $firmaRecibida) = explode('$', $_COOKIE['auten_token']);

    //Recrea el hash de la misma manera
    $firmaRecreada = hash_hmac('sha256', $sesionCodificada64, $clave_secreta);


    //Verifica el hash recreado si conside con el recibido la clave es la correspondiente
    //Firma como fue creada: $firma = hash_hmac('sha256',$sesionCodificada64,$clave_secreta);
    if (hash_equals($firmaRecibida, $firmaRecreada)) {
        $deco_sesionCodificada64 = json_decode(base64_decode($sesionCodificada64), true);

        if ($deco_sesionCodificada64['vencimiento'] < time()) {
            echo "Token vencido";
        } else {
            echo "Token válido para usuario " . $deco_sesionCodificada64['usuario_id'] . " | " .  date('Y-m-d H:i:s', $deco_sesionCodificada64['vencimiento']);
        }
    } else {
        echo "Token inválido o modificado";
    }
} else {
    echo "No hay sesión activa";
}
