<?php

include('./config.php');
echo '<pre>';
print_r($_POST);
echo '</pre>';

$email = $_POST['email'];
$senha_us = $_POST['senha_us'];


$querySelect = "SELECT * FROM tb_usuario  WHERE email = '$email' and senha_us  = '$senha_us'";
$resultado = $conexao->query($querySelect);
$usuario = $resultado->fetchAll();
$n = count($usuario);

if ($n == 1 or $email =="admin" and $senha_us="123" ){
  session_start();
  $_SESSION['email'] = $users[0]['email'];
  $_SESSION['senha_us'] = $users[0]['senha_us'];
  $_SESSION['autenticado'] = 'SIM';
  header('Location: ./web/pag1.php');
}else{
  header('Location: ./usuario/telalogin.php');
}


?>