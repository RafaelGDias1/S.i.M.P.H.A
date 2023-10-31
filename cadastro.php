<?php
    session_start();
    include('config.php');

    $email = mysqli_real_escape_string($config, trim($_POST['email']));
    $password = mysqli_real_escape_string($config, trim(md5($_POST['password'])));

    $sql = "SELECT count(*) as total FROM users WHERE email = '$email'";
    $result = mysqli_query($config, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] > 0) {
        $_SESSION['users_existe'] = true;
        header('Location: cadastrar.php');
        exit;
    }

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    if ($config->query($sql) === TRUE) {
        $_SESSION['status_cadastro'] = true;
    } else {
        echo "Erro ao cadastrar: " . $config->error;
    }

    $config->close();

    header('Location: cadastrar.php');
    exit;
?>









    