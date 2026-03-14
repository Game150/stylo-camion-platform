<?php
define('BASE_PATH', dirname(__DIR__, 4));
require_once(BASE_PATH . '/config/mysql_connect.php');

$consulta = $conn->prepare('SELECT codigoISO, descripcion FROM nacionalidad');
$consulta->execute();
$resultado = $consulta->get_result();

if ($resultado->num_rows > 0) {
    $paises = [];
    $listaPaises = [];

    while ($fila = $resultado->fetch_assoc()) {
        $paises[] = $fila;
        $listaPaises[] = "<option value='".$fila['codigoISO']."'>" . $fila['codigoISO'] . ' - ' . $fila['descripcion'] . "</option>";
    }

    return $respuesta = ['estado' => true, 'lista' => $listaPaises];
} else {
    return $respuesta = ['estado' => false, 'mensaje' => 'Actualmente no se pueden obtener los países disponibles'];
}
