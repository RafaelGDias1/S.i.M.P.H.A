<?php
    

    $servername = "localhost";
    $username = "simpha";
    $password = "123456";
    $databesa = "login";


    $mysqli = new mysqli($servername, $username, $password, $databesa);

    // Verifica a conexão
    if ($mysqli->error) {
        die("Falha na conexão: " . $mysqli->error);
    }
    
?>