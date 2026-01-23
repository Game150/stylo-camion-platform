<?php
header('Content-Type: application/json');
include_once('auth_token.php');

//Captura la solicitud proveniente del JS
$solicitud = json_decode(file_get_contents('php://input'), true);

//Verifica que el Json sea valido
if (!$solicitud || !is_array($solicitud)) {
    http_response_code(400);
    echo json_encode(['error' => 'JSON inválido']);
    exit;
}

//Guarda en variable el servicio a comunicar, en caso de solicitud sin el formato esperado este queda vació
$servicio = $solicitud['servicio'] ?? '';


if ($estado_auth !== 'vigente') {
    http_response_code(401);
    echo json_encode(['error' => 'No autorizado']);
    exit;
} else {
    /* Ejemplo de uso
    switch ($servicio) {

        case 'cargas.listar':
            require_once 'servicios/cargas.php';
            $resultado = listarCargas($solicitud);
            echo json_encode($resultado);
            break;

        default:
            http_response_code(400);
            echo json_encode(['error' => 'Servicio no válido']);
    }
    */

    
    //Gateway
    switch ($servicio) {
        case '':
            break;

        default:
            http_response_code(400);
            echo json_encode(['error' => 'Servicio no válido']);
    }
}
