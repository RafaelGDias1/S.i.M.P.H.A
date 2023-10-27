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

            header("Location: site.php"); 
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
</head>
<body>
 <script src="buger.js"></script>


<form method="post" action="index.php">

<header>

       <!img src="img/PH-img.png" alt="PH">

    <nav <!--class="navegacao"-- >
        <div class="buger-menu">
            <div class="linha1"></div>
            <div class="linha2"></div>
            <div class="linha3"></div>
       </div>
        <ul>
            <li><a href="#">contato</a></li>
            <li><a href="#">sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="site.php">Suporte</a></li>
        </ul>
       
    </nav>


</header>	  

<main>




</main>

<input class="btnLogin-popup" type="submit" value="entra" name="entra">


</form>
</body>
</html>