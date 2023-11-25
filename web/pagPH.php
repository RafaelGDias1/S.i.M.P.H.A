<?php 
session_start();
ob_start();
 if(!empty($_SESSION['id_email'])){
    echo "ola".$_SESSION['email'].",vindo";
 }else{
    $_SESSION['msg'] = "ARES";
    header("Location: ./usuario/telalogin.php");
 }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
</head>
<body>




    <h1>LOGADO</h1> 

<a href="pag1.php">Sair</a>
  
</form>
</body>
</html>