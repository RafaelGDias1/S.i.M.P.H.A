<?php

require_once "conf.php"; //inclui o arquivo de configuração do banco de dados

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_post["name"];
    $email = $_post["email"];
    $password = $_POST["password"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT); //deixa o armazenamento seguro e a senha criptografada 

    $sql = "INSERT INTO users (name, email, password) VALUES(?,?,?)"; //definir a consulta sql para inserir um novo usuario na tabela users

    $stmt = $conn->prepare($sql); //prepara a consulta sql segura

    $stmt->bind_param("sss", $name, $email, $hashed_password); //garante que os dados sejam tratado corretamente evitando problema de seguraça

    if($stmt->execute()){

        echo"Usuário Criado com sucesso";
     } 
    
    else {
        echo "Erro: " . $sql."<br>" . $coon->error;

    }

    $stmt->close();

}

$conn->close();

?>