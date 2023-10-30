<?php

     session_start();

    require_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $sql = "SELECT * FROM users WHERE name = ? AND email = ?";

    $stmt = $conn->prepare($sql);
    $stmt ->bind_param("ss", $name, $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc(); 

        if (password_verify($password, $row['password'])) {

            $_SESSION["loggedin"] = true; 

            header("Location: pagPH.php"); 
            exit; 

        }
    }

    else {
        $error = "Usuário ou senha incorretos";
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="telalogin.php">

    <nav>
        <input type="checkbox" id="check">
        <label for="check">
           <i class="burges" id="btn"></i> <!--fa fa-bars--> 
           <i class="burges-perdido" id="cancel"></i> <!--fa fa-times--> 
        </label>
        <img src="img/SIMPHA- sem fundo.png" >

        <ul>
            <li><a href="telalogin.php">Entrar</a></li>
            <li><a href="cadastrar.php">Criar uma conta</a></li>
           
        </ul>
       
    </nav>








        </form>
    </body>
 </html>