<?php

require_once "conf.php"; //inclui o arquivo de configuração do banco de dados

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_post["name"];
    $email = $_post["email"];
    $password = $_POST["password"];

}


?>