<?php
  session_start();
    include ('config.php'); 

    $email = mysqli_real_escape_string($config, trim($_POST['email']));
    $password = mysqli_real_escape_string($config, trim(md5($_POST['password'])));


    $sql = "select count(*) as total from users where users = '$users'";
    $result - mysqli_query($config, $sql);
    $row = mysqli_fetch_assoc($result);

    if($Row['total'] == 1){
        $_SESSION['users_existe'] = true;
        header('Location: cadastrar.php');
        exit;
    }

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password' NOW())";

    if($config->query($sql) == TRUE){
        $_SESSION['status_cadastro'] = true;
    }

$config->close();

header('Location: cadastrar.php');
exit;


?>









    