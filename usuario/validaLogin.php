<?php
session_start();
include_once ('../confg/conexao.php');


$entrar = filter_input(INPUT_POST, 'entrar', FILTER_DEFAULT);
if($entrar){
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
//echo "$email - $senha";
if((!empty($email)) AND (!empty($senha))){
  password_hash($senha, PASSWORD_DEFAULT);
  $result_email = $conn->query( "SELECT id_email, email, senha_us FROM tb_usuario WHERE email='$email' ");
    $resultado_email = mysqli_query($email, $result_email);
    if($result_email){

      $row_email = mysqli_fetch_assoc($mysql_result, $resultado_email);

      if(password_verify($senha_us, $row_email['senha'])){
        
        $_SESSION['id_email'] = $row_email['id_email'];

        $_SESSION ['email'] = $row_email ['email'];

        header("Locatiion: ../web/pagPH.php");
      }else{
        $_SESSION['msg'] = "Login e senha incorreto";
        header("Location: telalogin.php");
      }
    }
}else{
  $_SESSION['msg'] = "Login e senha incorreto";
  header("Location: telalogin.php");
}
}else{
  $_SESSION['msg'] = "Página não encontrada";
  header("Location: telalogin.php");
}


?>