<?php

require_once "conf.php"; //inclui o arquivo de configuração do banco de dados

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_post["name"];
    $email = $_post["email"];
    $password = $_POST["password"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT); //deixa o armazenamento seguro e a senha criptografada 

    $sql = "INSERT INTO users (name, email, password) VALUES(?,?,?)"; //definir a consulta sql para inserir um novo usuario na tabela users

    

}


?>