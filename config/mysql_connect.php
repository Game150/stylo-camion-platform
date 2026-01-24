<?php 
$config = require __DIR__ . '/config.php'; // devuelve el arrayecho $config;

$host = $config['DB_HOST'];
$username = $config['DB_USER'];
$password = $config['DB_PASS'];
$dbname = $config['DB_NAME'];

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//"Estado del servidor: " . $conn->stat()
//"Host info: " . $conn->host_info
//"Versión del servidor: " . $conn->server_info
//Cierra la conección $conn->close();
//Para cuando hago delete,update o insert: $conn->begin_transaction(); $conn->rollback();[En un catch (Exception $e)]
?>