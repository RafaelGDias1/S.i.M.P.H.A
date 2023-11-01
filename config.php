<?php

$servername = "localhost";
$username = "simpha";
$password = "123456";
$database = "login";
$config = array();

$mysqli = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

// Atribui o objeto mysqli à variável $config
$config = $mysqli;

?>
